<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('posts.admin.dashboard');
    }

    public function fines()
    {
        return view('posts.admin.fines');
    }
}