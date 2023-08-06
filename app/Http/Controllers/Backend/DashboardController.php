<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bazar;
use App\Models\Meal;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_cost = Bazar::sum('price');
        $total_users = User::count();
        $totla_meals = Meal::sum('meal_no');
        return view('backend.dashboard.index',compact('total_cost','total_users','totla_meals'));
    }
}
