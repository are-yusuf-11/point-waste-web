<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman awal (Landing Page) sebelum login.
     */
    public function index()
    {
        // Mengembalikan view bernama 'welcome' atau 'landing'
        return view('landing'); 
    }
}