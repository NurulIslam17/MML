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
        return view('backend.bazar.index');
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
            return back();
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            notify()->error("Something Went Wrong", "Error", "bottomRight");
            DB::rollback();
        }
    }
}
