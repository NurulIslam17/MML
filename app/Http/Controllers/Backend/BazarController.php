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
            DB::beginTransaction();

            $bazar_id = Bazar::create([
                'user_id' => auth()->user()->id,
                'price' => $request->price,
                'bazar_date' => $request->date
            ]);
            foreach ($items as $key => $item) {
                dd($item_price[$key]);
                BazarDetail::create([
                    "bazar_id" => $$bazar_id->id,
                    "item" => $item,
                    "item_price" => $item_price[$key],
                ]);
            }
            notify()->success("Inserted Successfully", "Success", "topRight");
            DB::commit();
            return back();
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            notify()->error("Error notification test", "Error", "topRight");
            DB::rollback();
        }
    }
}
