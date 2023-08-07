<?php

namespace App\Http\Controllers\Backend;

use Throwable;
use App\Models\User;
use App\Models\Deposite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class DepositeController extends Controller
{
    public function index()
    {
        if (auth()->user()->type == 1) {
            $deposites = Deposite::with(['user'])->get();
        }else{
            $deposites = Deposite::with(['user'])->where('user_id',auth()->user()->id)->get();
        }
        return view('backend.deposite.index', compact('deposites'));
    }
    public function create()
    {
        $users = User::latest()->get();
        return view('backend.deposite.create', compact('users'));
    }
    public function store(Request $request)
    {
        try {
            Deposite::create([
                'user_id' => $request->user_id,
                'amount' => $request->amount,
                'deposite_on' => $request->deposite_on,
            ]);
            Toastr::success('Data Inserted Successfully');
            return redirect()->route('deposite.index');
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            Toastr::error('Data Inserted Failed');
            return back();
        }
    }
}
