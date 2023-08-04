<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return $request;
        
    }
}
