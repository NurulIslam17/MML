<?php

namespace App\Http\Controllers\Backend;

use Throwable;
use App\Models\Meal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Toastr;

class MealController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        $meals = Meal::when(isset($request->for), function ($q) use ($request) {
            $q->where('user_id', $request->for);
        })
            ->when(isset($request->date), function ($q) use ($request) {
                $q->where('meal_on', $request->date);
            })
            ->orderBy('id', 'DESC')
            ->with(['user', 'mealCreatedBy'])
            ->get();
        return view('backend.meal.index', compact('meals', 'users'));
    }
    public function create()
    {
        $users = User::latest()->get();
        return view('backend.meal.create',compact('users'));
    }
    public function store(Request $request)
    {
        try {
            Meal::create([
                'user_id' => $request->user_id,
                'meal_no' => $request->meal_no,
                'created_by' => auth()->user()->id,
                'meal_on' => $request->meal_on,
            ]);
            Toastr::success('Data Inserted Successfully');
            return back();
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            Toastr::error('Data Inserted Failed');
            return back();
        }
    }

    public function edit($id){
        $meal = Meal::with('user')->findOrFail($id);
        return view('backend.meal.edit',compact('meal'));
    }

    public function update(Request $request,$id){
        // return $request;
        try {
            Meal::where('id',$id)->update([
                'meal_no' => $request->meal_no,
                'created_by' => auth()->user()->id,
                'meal_on' => $request->meal_on,
            ]);
            Toastr::success('Data Updated Successfully');
            return redirect()->route('meal.index');
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            Toastr::error('Data Updated Failed');
            return back();
        }

        return view('backend.meal.edit',compact('meal'));
    }
}
