<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MateriController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'topik' => 'required|string|max:255',
            'modul' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Materi::create($validated);
        return redirect()->back()->with('success', 'Materi berhasil ditambahkan!');
    }

    public function tambahMateri1()
    {
        return view('guru.tambahMateri');
    }

    public function tambahMateri2(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul' => 'required|string',
            'topik' => 'required|string',
            'modul' => 'required|string',
            'deskripsi' => 'required|string',
            'harga' => 'required|string'
        ]);

        $request->session()->put('judul', $request->input('judul'));
        $request->session()->put('topik', $request->input('topik'));
        $request->session()->put('modul', $request->input('modul'));
        $request->session()->put('deskripsi', $request->input('deskripsi'));
        $request->session()->put('harga', $request->input('harga'));

        return view('guru.tambahMateri2');
    }
    public function tambahMateri3(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image',
        ]);
        
        $file = $request->file('gambar');
        $path = $file->store('public/gambar');
        
        $encryptedFileName = basename($path); 
        
        $request->session()->put('fileName', $encryptedFileName);
        
        // dd($encryptedFileName);
        return view('guru.tambahMateri3');
    }
    public function createTambahMateri(Request $request)
    {
        $idKelas = session('kelas_id');
        $judul = $request->session()->get('judul');
        $topik = $request->session()->get('topik');
        $modul = $request->session()->get('modul');
        $deskripsi = $request->session()->get('deskripsi');
        $harga = $request->session()->get('harga');
        $namaFile = $request->session()->get('fileName');


        $request->validate([
            'fileModul' => 'required|file'
        ]);

        $modulFile = $request->file('fileModul')->store('public/modul');

        Materi::create([
            'user_id' => Auth::id(),
            'kelas_id' => $idKelas,
            'judul' => $judul,
            'topik' => $topik,
            'modul' => $modul,
            'harga' => $harga,
            'deskripsi' => $deskripsi,
            'gambar' => $namaFile,
            'fileModul' => $modulFile,

        ]);
        // $request->session()->flush();
        $idKelas = session('kelas_id');
        Session::forget('kelas_id');
        Session::forget(['judul', 'topik', 'modul','deskripsi','filename']);


        return redirect('/timeLine/'.$idKelas);
    }
}
