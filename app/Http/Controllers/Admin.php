<?php

namespace App\Http\Controllers;

use App\Models\Laboratorium;
use App\Models\Lapangan;
use Illuminate\Http\Request;
use App\Models\Pohon;
use App\Models\Pegawai;
use DB;

class Admin extends Controller
{
    public function index(){
        $data = Pohon::all();

        return view('admin.dashboard')->with('data', $data);
    }

    public function showpegawai(){
        $data = Pegawai::all();

        return view('admin.data-pegawai')->with('data', $data);
    }

    public function showlab(){
        $data = Laboratorium::all();

        return view('admin.data-laboratorium')->with('data', $data);
    }

    public function showlapangan(){
        $data = Lapangan::all();

        return view('admin.data-lapangan')->with('data', $data);
    }

}
