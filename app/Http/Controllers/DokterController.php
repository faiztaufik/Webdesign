<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function spesialis(){
        return view('dokter_spesialis');
    }
    public function umum(){
        return view('dokter_umum');
    }
    public function detail(){
        return view('detail');
    }
}
