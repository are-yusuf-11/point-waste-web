<?php

namespace App\Http\Controllers\PengurusRT;

use App\Http\Controllers\Controller;
use App\Models\DetailSetorSampah;
use App\Models\KategoriSampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriSampahController extends Controller
{
    public function index()
    {
        return view('pengurus-rt.waste-categories');
    }
}
