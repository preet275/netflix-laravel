<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Display admin home
public function index()
{
    return view('admin.home');
}
}
