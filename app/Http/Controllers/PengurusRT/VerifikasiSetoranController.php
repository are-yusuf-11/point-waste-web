<?php

namespace App\Http\Controllers\PengurusRT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifikasiSetoranController extends Controller
{
    public function index()
    {
        return view('pengurus-rt.verifikasi-setoran');
    }
}
