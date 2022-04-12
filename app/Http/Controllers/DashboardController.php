<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('website.home.home');
    }
    public function product()
    {
        return view('website.home.product');
    }
}
