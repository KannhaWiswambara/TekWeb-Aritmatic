<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function calculate(Request $request){
        $base = $request->base;
        $height = $request->height;

        $hasil = 1/2 * $base * $height;
        return view('aritmatika', compact('hasil'));
    }
}
