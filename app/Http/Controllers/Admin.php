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

    public function addlab(){
        return view('admin.data-laboratorium');
    }

    public function store_laboratorium(Request $request){
        $validatedData = $request->validate([
            'nama_lab' => 'required',
            'kapasitas' => 'required|integer',
        ]);
        $lastLab = Laboratorium::orderBy('id_lab', 'desc')->first();
        if ($lastLab) {
            $lastIdNumber = (int) substr($lastLab->id_lab, 2);
            $newIdNumber = $lastIdNumber + 1;
        } else {
            $newIdNumber = 1;
        }
        $newIdLab = 'S-' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
        $validatedData['id_lab'] = $newIdLab;
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

    public function addlapangan(){
        return view('admin.create-data-lapangan');
    }

    public function store_lapangan(Request $request){
        $request->validate([
            'luas' => 'required|numeric',
            'lokasi' => 'required|string',
            'kondisi_tanah' => 'required|string',
        ]);
        $lastLapangan = Lapangan::orderBy('id_lapangan', 'desc')->first();
        if ($lastLapangan) {
            $lastIdNumber = (int) substr($lastLapangan->id_lapangan, 3);
            $newIdNumber = $lastIdNumber + 1;
        } else {
            $newIdNumber = 1;
        }

        $newIdLapangan = 'LP-' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
        Lapangan::create([
            'id_lapangan' => $newIdLapangan,
            'luas' => $request->luas,
            'lokasi' => $request->lokasi,
            'kondisi_tanah' => $request->kondisi_tanah,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // dd($newIdLapangan);
        return redirect()->intended('admin/lapangan')->with('success', 'Data lapangan berhasil disimpan!');
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
