<?php

namespace App\Http\Controllers\Backend;

use Throwable;
use App\Models\Meal;
use App\Models\User;
use App\Models\Bazar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ReportController extends Controller
{
    public function index()
    {
        $users = User::with('bazars', 'meals', 'deposites')->get();
        $shopping_cost = Bazar::where('status', 1)->sum('price');
        $total_meal = Meal::sum('meal_no');

        $meal_rate = 0;
        if ($shopping_cost != 0 || $total_meal != 0) {
            $meal_rate = $shopping_cost / $total_meal;
        }
        // return $users;
        return view('backend.report.index', compact('users', 'meal_rate'));
    }

    public function status($id)
    {
        try {
            User::where('id',$id)->update([
                'is_due_paid' => 1
            ]);
            Toastr::success('Successfully Paid');
            return redirect()->route('report.index');
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            Toastr::error('Operation Failed');
            return back();
        }
    }
}
