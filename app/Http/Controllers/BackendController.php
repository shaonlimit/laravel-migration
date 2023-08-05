<?php

namespace App\Http\Controllers;



class BackendController extends Controller
{
    public function showDashboard()
    {
        return view('backend.layouts.dashboard');
    }
}