<?php

namespace App\Http\Controllers\Backend;

use App\Models\Logo;
use App\Models\Meal;
use App\Models\User;
use App\Models\Bazar;
use App\Models\Deposite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $total_cost = Bazar::where('status',1)->sum('price');
        $total_users = User::count();
        $totla_meals = Meal::sum('meal_no');
        $deposite = Deposite::sum('amount');
        $logo = Logo::first();
        //division by Zero execption
        if ($total_cost == 0 || $totla_meals == 0) {
            $meal_rate = 0;
        } else {
            $meal_rate = round($total_cost / $totla_meals, 2);
        }
        return view('backend.dashboard.index', compact('total_cost', 'logo','total_users', 'totla_meals', 'meal_rate','deposite'));
    }
}
