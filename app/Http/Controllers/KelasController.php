<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Order;
use App\Models\Siswa;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    public function delete($id)
    {
        // Cari data berdasarkan ID
        $kelas = Kelas::find($id);
    
        // Jika data tidak ditemukan, tampilkan pesan error
        if (!$kelas) {
            return redirect()->back()->with('error', 'Kelas tidak ditemukan.');
        }
    
        try {
            // Hapus data
            $kelas->delete();
    
            // Redirect dengan pesan sukses
            return redirect()->back()->with('success', 'Kelas berhasil dihapus.');
        } catch (\Exception $e) {
            // Tangani jika terjadi error saat menghapus
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus kelas.');
        }
    }
    

    public function store(Request $request)
    {

        $validated = $request->validate([
            'kelas' => 'required|string|max:255',
            'nama_kelas' => 'required|string|max:255',
            'kurikulum' => 'nullable|string|max:255',
            'mata_pelajaran' => 'nullable|string',
        ]);

        $codeRandom =  str()->random(5);
        // dd($codeRandom);
        // dd(Auth::id());
        Kelas::create([
            'user_id' => Auth::id(),
            'kelas' => $request->kelas,
            'nama_kelas' => $request->nama_kelas,
            'kurikulum' => $request->kurikulum,
            'mata_pelajaran' => $request->mata_pelajaran,
            'code_kelas' => $codeRandom
        ]);

        return redirect()->back()->with('success', 'kelas berhasil ditambahkan!');
    }

    public function siswa(Request $request) {

        $request->validate([
            'kode' => 'required|string'
        ]);


        $cariKelas = Kelas::where('code_kelas',$request->kode)->first();
        $idKelas = $cariKelas->id;
        $cariSiswa = Siswa::where('kelas_id',$cariKelas->id)->count();
        // dd($cariSiswa);
        if($cariSiswa == 0){
            Siswa::create([
                'user_id' => Auth::id(),
                'kelas_id' => $idKelas
            ]);
        }

        return redirect()->back();
    }


    public function siswaIndex(){
        $code = Order::where([['user_id',Auth::id()],['status','Dibayar']])->with('materi.kelas')->get();
        $kelas = Siswa::where('user_id',Auth::id())->get();
        session()->forget('kelas_id');
        return view('siswa.gabungKelas',compact('kelas','code'));
    }

    public function kelasUser($id){
        // session(['kelas_id' => $id]);
        $kelas = Kelas::find($id);
        $materi = Materi::where('kelas_id',$id)->get();
        $siswa = Siswa::where('kelas_id',$id)->count();
        // dd($kelas);
        return view('siswa.timeLine',compact('materi','kelas','siswa'));
    }
}
