<?php

namespace App\Http\Controllers\PengurusRT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriSampahController extends Controller
{
    public function index()
    {
        return view('pengurus-rt.waste-categories');
    }
}
