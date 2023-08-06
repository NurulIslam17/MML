<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        return view('backend.meal.index');
    }
    public function create()
    {
        return view('backend.meal.create');
    }
    public function store(Request $request)
    {
        return $request;
        return view('backend.meal.create');
    }
}
