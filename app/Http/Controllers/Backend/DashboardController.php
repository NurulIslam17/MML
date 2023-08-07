<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bazar;
use App\Models\Deposite;
use App\Models\Meal;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_cost = Bazar::where('status',1)->sum('price');
        $total_users = User::count();
        $totla_meals = Meal::sum('meal_no');
        $deposite = Deposite::sum('amount');
        //division by Zero execption
        if ($total_cost == 0 || $totla_meals == 0) {
            $meal_rate = 0;
        } else {
            $meal_rate = round($total_cost / $totla_meals, 2);
        }
        return view('backend.dashboard.index', compact('total_cost', 'total_users', 'totla_meals', 'meal_rate','deposite'));
    }
}
