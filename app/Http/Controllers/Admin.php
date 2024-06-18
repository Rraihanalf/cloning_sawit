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
use Illuminate\Support\Facades\Hash;

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

    public function add_pegawai(){
        $data = Laboratorium::all();

        return view('admin.create-data-pegawai')->with('data', $data);
    }

    public function store_pegawai(Request $request){
        $validatedData = $request->validate([
            'nama_pegawai' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'email_pegawai' => 'required|email|unique:pegawais,email_pegawai',
            'no_hp_pegawai' => 'required|numeric|max:20',
            'id_lab' => 'required',
        ]);

        $lastPegawai = Pegawai::orderBy('id_pegawai', 'desc')->first();
        if ($lastPegawai) {
            $lastIdNumber = (int) substr($lastPegawai->id_pegawai, 3);
            $newIdNumber = $lastIdNumber + 1;
        } else {
            $newIdNumber = 1;
        }

        $newIdPegawai = 'PL-' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);

        $validatedData['id_pegawai'] = $newIdPegawai;
        dd($validatedData);
        // Pegawai::create($validatedData);
        // return redirect()->intended('pegawai/admin')->with('success', 'Data Pegawai Baru Berhasil Dibuat!');
    }

    public function showlab(){
        $data = Laboratorium::all();

        return view('admin.data-laboratorium')->with('data', $data);
    }

    public function add_lab(){
        return view('admin.create-data-laboratorium');
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
        dd($validatedData);
        // Laboratorium::create($validatedData);
        // return redirect()->intended('admin/laboratorium')->with('success', 'Data Laboratorium Baru Berhasil Dibuat!');
    }

    public function showlapangan(){
        $data = Lapangan::all();

        return view('admin.data-lapangan')->with('data', $data);
    }

    public function addlapangan(){
        return view('admin.create-data-lapangan');
    }

    public function store_lapangan(Request $request)
    {
        $validatedData = $request->validate([
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

        $validatedData['id_lapangan'] = $newIdLapangan;
        $validatedData['created_at'] = now();
        $validatedData['updated_at'] = now();

        dd($validatedData);
        // Lapangan::create($validatedData);

        // return redirect()->intended('admin/lapangan')->with('success', 'Data lapangan berhasil disimpan!');
    }

    public function showsampel(){
        $data = Sampel::all();

        return view('admin.data-sampel')->with('data', $data);
    }

    public function add_sampel(){
        $data = Laboratorium::all();
        return view('admin.create-data-sampel')->with('data', $data);
    }

    public function store_sampel(Request $request){
        $validatedData = $request->validate([
            'id_lab' => 'required|string',
            'jenis_bibit' => 'required|string',
            'asal_bibit' => 'required|string',
        ]);

        $lastSampel = Sampel::orderBy('id_sampel', 'desc')->first();
        if ($lastSampel) {
            $lastIdNumber = (int) substr($lastSampel->id_sampel, 3);
            $newIdNumber = $lastIdNumber + 1;
        } else {
            $newIdNumber = 1;
        }

        $newIdSampel = 'SP-' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);

        $validatedData['id_sampel'] = $newIdSampel;
        $validatedData['created_at'] = now();
        $validatedData['updated_at'] = now();

        dd($validatedData);
        // Sampel::create($validatedData);

        // return redirect()->intended('admin/sampel')->with('success', 'Data sampel berhasil disimpan!');
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'id_lab' => 'required|string',
            'jenis_bibit' => 'required|string',
            'asal_bibit' => 'required|string',
        ]);

        // Mencari sampel berdasarkan id_sampel
        $sampel = Sampel::findOrFail($id);

        // Memperbarui data sampel
        $sampel->id_lab = $validatedData['id_lab'];
        $sampel->jenis_bibit = $validatedData['jenis_bibit'];
        $sampel->asal_bibit = $validatedData['asal_bibit'];
        $sampel->updated_at = now();

        // Menyimpan perubahan
        $sampel->save();

        // Redirect dengan pesan sukses
        return redirect()->intended('admin/sampel')->with('success', 'Data sampel berhasil diperbarui!');
    }

    public function delete($id)
    {
        // Mencari sampel berdasarkan id_sampel
        $sampel = Sampel::findOrFail($id);

        // Menghapus data sampel
        $sampel->delete();

        // Redirect dengan pesan sukses
        return redirect()->intended('admin/sampel')->with('success', 'Data sampel berhasil dihapus!');
    }



    public function showuser(){
        $data = User::all();

        return view('admin.data-user')->with('data', $data);
    }

    public function add_user(){
        return view('admin.create-data-user');
    }
    public function store_user(Request $request){
        $validatedData = $request->validate([
            'id_pegawai' => 'required',
            'password' => 'required',
            'level' => 'required|integer'
        ]);

        $validatedData['username'] = str_replace('-', '', $validatedData['id_pegawai']);
        
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        dd($validatedData);
        // User::create($validatedData);
        // return redirect()->intended('admin/user')->with('success', 'Data Pengguna Baru Berhasil Dibuat!');
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

    public function deteleuser(){
        
    }
}
