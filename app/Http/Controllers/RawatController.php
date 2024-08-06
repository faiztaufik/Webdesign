<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RawatController extends Controller
{
    public function inap(){
        return view('rawat_inap');
    }
    public function jalan(){
        return view('rawat_jalan');
    }
}
