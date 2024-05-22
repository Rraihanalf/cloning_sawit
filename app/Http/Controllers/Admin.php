<?php

namespace App\Http\Controllers;

use App\Models\Laboratorium;
use App\Models\Lapangan;
use Illuminate\Http\Request;
use App\Models\Pohon;
use App\Models\Pegawai;
use App\Models\Sampel;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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

    public function addlab(Request $request){
        $validatedData = $request->validate([
            'id_lab' => 'required',
            'nama_lab' => 'required',
            'kapasitas' => 'required',
        ]);
        $validatedData['jumlah_pegawai'] = DB::table('pegawais')
                                        ->where('id_lab', $validatedData['id_lab'])
                                        ->count();
        Laboratorium::create($validatedData);
        return redirect()->intended('admin/laboratorium')->with('success', 'Data Laboratorium Baru Berhasil Dibuat!');
    }

    public function showlapangan(){
        $data = Lapangan::all();

        return view('admin.data-lapangan')->with('data', $data);
    }

    public function addlapangan(Request $request){
        $validatedData = $request->validate([
            'id_lapangan' => 'required',
            'luas' => 'required',
            'lokasi' => 'required',
            'kondisi_tanah' => 'required',
        ]);
        Lapangan::create($validatedData);
        return redirect()->intended('admin/lapangan')->with('success', 'Data Lapangan Baru Berhasil Dibuat!');
    }

    public function showsampel(){
        $data = Sampel::all();

        return view('admin.data-sampel')->with('data', $data);
    }

    public function showuser(){
        $data = User::all();

        return view('admin.data-user')->with('data', $data);
    }

    public function adduser(Request $request){
        $validatedData = $request->validate([
            'id_user' => 'required',
            'id_pegawai' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required'
        ]);
        User::create($validatedData);
        return redirect()->intended('admin/user')->with('success', 'Data Pengguna Baru Berhasil Dibuat!');
    }

    public function updateuser(Request $request, $id_user){
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'level' => 'required'
        ]);
        User::where('id_user', $id_user)->update($validatedData);
        return redirect()->intended('admin/user')->with('success', 'Data Pengguna Berhasil Diubah!');
    }
}
