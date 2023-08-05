<?php

namespace App\Http\Controllers\Backend;

use Throwable;
use App\Models\User;
use App\Models\Bazar;
use App\Models\BazarDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class  BazarController extends Controller
{
    public function index()
    {
        $bazars = Bazar::with(['user'])->get();
        return view('backend.bazar.index', compact('bazars'));
    }
    public function create()
    {
        return view('backend.bazar.create');
    }
    public function store(Request $request)
    {
        $items = $request->items;
        $item_price = $request->item_price;

        $sum = 0;
        for ($i = 0; $i < count($item_price); $i++) {
            $sum += $item_price[$i];
        }

        try {
            if ($sum  != $request->price) {
                notify()->error("Check Items Price Sum", "Error", "bottomRight");
                return back();
            }
            DB::beginTransaction();
            $bazar_id = DB::table('bazars')->insertGetId([
                'user_id' => auth()->user()->id,
                'price' => (int) $request->price,
                'bazar_date' => $request->date
            ]);
            foreach ($items as $key => $item) {
                BazarDetail::create([
                    "bazar_id" => $bazar_id,
                    "item" => $item,
                    "item_price" => $item_price[$key],
                ]);
            }
            notify()->success("Inserted Successfully", "Success", "bottomRight");
            DB::commit();
            return redirect()->route('bazar.index');
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            notify()->error("Something Went Wrong", "Error", "bottomRight");
            DB::rollback();
        }
    }

    public function bazarDetails($id)
    {
        $bazar_details = BazarDetail::where('bazar_id', $id)->get();
        $totla_price = $bazar_details->sum('item_price');
        return view('backend.bazar.details', compact('bazar_details', 'totla_price'));
    }

    public function approve($id)
    {
        $bazar = Bazar::findOrFail($id);
        if ($bazar->status == 0) {
            $data = [
                'status' => 1,
            ];
        } else {
            $data = [
                'status' => 0,
            ];
        }
        $bazar->update($data);
        notify()->success("Updated Successfully", "Success", "bottomRight");
        return redirect()->route('bazar.index');
    }

    public function personwiseCost()
    {
        $user_wise_bazar = User::with('bazars')->get();
        return view('backend.bazar.person_wise', compact('user_wise_bazar'));
    }

    public function personWiseBazarDetails($id)
    {
        $user = User::findOrFail($id);
        $bazars = Bazar::where('user_id', $id)->get();
        return view('backend.bazar.person_wise_details', compact('bazars', 'user'));
    }
}
