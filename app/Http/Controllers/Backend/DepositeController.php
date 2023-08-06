<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepositeController extends Controller
{
    public function index()
    {
        return view('backend.deposite.index');
    }
    public function create()
    {
        $users = User::latest()->get();
        return view('backend.deposite.create',compact('users'));
    }
    public function store()
    {
        $users = User::latest()->get();
        return view('backend.deposite.create',compact('users'));
    }
}
