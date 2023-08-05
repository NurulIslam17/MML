<?php

namespace App\Http\Controllers\Backend;

use Throwable;
use App\Models\Bazar;
use App\Models\BazarDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class BazarController extends Controller
{
    public function index()
    {
        $bazars = Bazar::with(['user'])->get();
        // return $bazars;
        return view('backend.bazar.index',compact('bazars'));
    }
    public function create()
    {
        return view('backend.bazar.create');
    }
    public function store(Request $request)
    {
        $items = $request->items;
        $item_price = $request->item_price;
        try {
            // dd($request->all());
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
        $bazar_details = BazarDetail::where('bazar_id',$id)->get();
        $totla_price = BazarDetail::where('bazar_id',$id)->sum('item_price');
        return view('backend.bazar.details',compact('bazar_details','totla_price'));
    }
}
