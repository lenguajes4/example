<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        //$usuario = Auth::user();
        return view('dashboard.index');
    }
}
