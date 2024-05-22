<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pohon;
use App\Models\Sampel;

class PetugasLab extends Controller
{
    public function index(){
        $data = Pohon::all();

        return view('petugas.dashboard')->with('data', $data);
    }

    public function showsampel(){
        $data = Sampel::all();

        return view('petugas.data-sampel')->with('data', $data);
    }
}
