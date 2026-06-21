<?php

namespace App\Http\Controllers\PengurusRT;

use App\Http\Controllers\Controller;

class DashboardRTController extends Controller
{
    public function index()
    {
        return view('pengurus-rt.dashboard');
    }
}
