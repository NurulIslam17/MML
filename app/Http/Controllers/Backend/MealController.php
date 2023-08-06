<?php

namespace App\Http\Controllers\Backend;

use Throwable;
use App\Models\Meal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class MealController extends Controller
{
    public function index()
    {
        $meals = Meal::orderBy('id','DESC')->with(['user','mealCreatedBy'])->get();
        // return $meals;
        return view('backend.meal.index',compact('meals'));
    }
    public function create()
    {
        $users = User::latest()->get();
        return view('backend.meal.create',compact('users'));
    }
    public function store(Request $request)
    {
        // return $request;
        try {
            Meal::create([
                'user_id' => $request->user_id,
                'meal_no' => $request->meal_no,
                'created_by' => auth()->user()->id,
                'meal_on' => $request->meal_on,
            ]);
            Toastr::success('Data Inserted Successfully');
            return redirect()->route('meal.index');
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            Toastr::error('Data Inserted Faied');
        }
        return view('backend.meal.create');
    }
}
