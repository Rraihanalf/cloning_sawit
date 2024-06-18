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

    public function store_sampel(Request $request){
        $validatedData = $request->validate([
            'id_lab' => 'required|string',
            'jenis_bibit' => 'required|string|max:255',
            'asal_bibit' => 'required|string|max:255',
        ]);

        $lastSampel = Sampel::where('id_lab', $validatedData['id_lab'])->orderBy('id_sampel', 'desc')->first();
        if ($lastSampel) {
            $lastIdNumber = (int) substr($lastSampel->id_sampel, -3);
            $newIdNumber = $lastIdNumber + 1;
        } else {
            $newIdNumber = 1;
        }

        $newIdSampel = 'SP-' . $validatedData['id_lab'] . '-' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);

        $validatedData['id_sampel'] = $newIdSampel;

        Sampel::create($validatedData);

        return redirect()->intended('sampel/petugas')->with('success', 'Data Sampel Baru Berhasil Dibuat!');
    }

    public function store_pohon(Request $request){
        $validatedData = $request->validate([
            'id_sampel' => 'required|string',
            'id_lapangan' => 'required|string',
            'tgl_tanam' => 'required|date',
            'tinggi_pohon' => 'required|numeric',
            'tgl_kematian' => 'nullable|date',
            'bukti_kematian' => 'nullable|string',
            'deskripsi' => 'required|string|max:255',
        ]);

        $lastPohon = Pohon::orderBy('id_pohon', 'desc')->first();
        if ($lastPohon) {
            $lastIdNumber = (int) substr($lastPohon->id_pohon, -3);
            $newIdNumber = $lastIdNumber + 1;
        } else {
            $newIdNumber = 1;
        }

        $newIdPohon = $validatedData['id_sampel'] . '-' . $validatedData['id_lapangan'] . '-P' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);

        $validatedData['id_pohon'] = $newIdPohon;

        Pohon::create($validatedData);

        return redirect()->intended('/petugas')->with('success', 'Data Pohon Baru Berhasil Dibuat!');
    }

    public function update_pohon(Request $request, $id_pohon){
        $validatedData = $request->validate([
            'id_sampel' => 'required|string',
            'id_lapangan' => 'required|string',
            'tgl_tanam' => 'required|date',
            'tinggi_pohon' => 'required|numeric',
            'tgl_kematian' => 'nullable|date',
            'bukti_kematian' => 'nullable|string',
            'deskripsi' => 'required|string|max:255',
        ]);

        $pohon = Pohon::where('id_pohon', $id_pohon)->firstOrFail();

        $pohon->update($validatedData);
        
        return redirect()->intended('/petugas')->with('success', 'Data Pohon Berhasil Diedit!');
    }

    public function delete_pohon($id_pohon){
        $pohon = Pohon::where('id_pohon', $id_pohon)->firstOrFail();

        // Menghapus data pohon
        $pohon->delete();

        return redirect()->intended('/petugas')->with('success', 'Data Pohon Berhasil Dihapus!');
    }
}
