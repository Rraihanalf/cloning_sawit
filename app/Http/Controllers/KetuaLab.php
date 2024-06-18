<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pohon;

class KetuaLab extends Controller
{
    public function index(){
        $data = Pohon::all();

        return view('ketua.dashboard')->with('data', $data);
    }
}
