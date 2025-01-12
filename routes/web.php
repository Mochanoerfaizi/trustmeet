<?php

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Materi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home1', function () {
    return view('home1');
});

// Route::get('/user', function () {
//     return view('user.blog');
// });

Route::get('/user',[OrderController::class, 'index'])->name('userBoking');
Route::post('/user/order/{id}',[OrderController::class, 'store'])->name('userBokingMateri');
Route::get('/user/pembayaran',[OrderController::class, 'pembayaran'])->name('userBayar');

// Route::get('/user/pembayaran', function () {
//     return view('user.menuPembayaran');
// });



// Route::get('/siswa', function () {
//     return view('siswa.gabungKelas');
// });



// Route::get('/siswa/1', function () {
//     return view('siswa.timeLine');
// });

Route::get('/download/public/modul/{filename}', function ($filename) {
    $filePath = 'public/modul/' . $filename;
    // dd($filePath);
    // dd($filePath);

    // Periksa apakah file ada di disk
    if (!Storage::exists($filePath)) {
        abort(404, 'File not found.');
    }

    // Kirim file untuk diunduh
    return Storage::download($filePath);
});

Route::get('/siswa/timeline/{id}',[KelasController::class,'kelasUser'])->name('kelasUser');

Route::get('/siswa/2', function () {
    return view('siswa.Materi');
});

Route::get('/siswa/3', function () {
    return view('siswa.obrolanKelas');
});

Route::get('/siswa/4', function () {
    return view('siswa.anggotaKelas');
});

Route::get('/siswa/5', function () {
    return view('siswa.Materi2');
});

Route::get('/profile', function () {
    return view('user.profile');
});



Route::get('/kelas', function () {
    $kelas = Kelas::where('user_id',Auth::id())->get();
    // dd(Auth::id());
    
    return view('guru.Home', compact("kelas"));
});

Route::delete('/kelas/{id}', function ($id) {
    $kelas = Kelas::find($id);
    $kelas->delete();
    return redirect()->back()->with('success', 'Kelas berhasil dihapus.');
});

Route::get('/timeLine/{id}', function ($id) {
    session(['kelas_id' => $id]);
    $kelas = Kelas::find($id);
    $siswa = Siswa::where('kelas_id',$id)->get();
    $materi = Materi::where([['kelas_id',$id],['user_id',Auth::id()]])->get();
    return view('guru.timeLine',compact('kelas','siswa','materi'));
});

Route::get('/guru/2', function () {
    return view('guru.Materi');
});

Route::get('/guru/3', function () {
    return view('guru.obrolanKelas');
});
Route::get('/guru/4', function () {
    return view('guru.anggotaKelas');
});

// Route::get('/guru/5', function () {
//     return view('guru.daftarPesanan');
// });

Route::get('/guru/pembayaran',[PaymentController::class, 'tampilPembayaran'])->name('tampilPembayaran');
// Route::get('/tambahMateri/1', function () {
//     return view('guru.tambahMateri');
// });

Route::get('/tambahMateri/1', [MateriController::class, 'tambahMateri1'])->name('tambahMateri1');
Route::post('/tambahMateri/2', [MateriController::class, 'tambahMateri2'])->name('tambahMateri2');
Route::post('/tambahMateri/3', [MateriController::class, 'tambahMateri3'])->name('tambahMateri3');
Route::post('/tambahMateri/4', [MateriController::class, 'createTambahMateri'])->name('createTambahMateri');

// Route::get('/tambahMateri/2', function () {
//     return view('guru.tambahMateri2');
// });

// Route::get('/tambahMateri/3', function () {
//     return view('guru.tambahMateri3');
// });

Route::get('/guru/9', function () {
    return view('guru.tambahMateri4');
});

Route::get('/guru/10', function () {
    return view('guru.Materi2');
});

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/materi', [MateriController::class, 'store'])->name('materi.store');



Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.store');
Route::post('/siswa/store/', [KelasController::class, 'siswa'])->name('siswa.store');

Route::get('/siswa',[KelasController::class,'siswaIndex'])->name('siswa.index');



Route::post('/bookings', [BookingController::class, 'store'])->middleware('auth');




Route::get('orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('orders', [OrderController::class, 'store'])->name('orders.store');
Route::post('guru/kirimKode', [OrderController::class, 'kirimCode'])->name('orders.kirimKode');



Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');

Route::get('/api/provinces', [LokasiController::class, 'getProvinces']);
Route::get('/api/regencies/{id}', [LokasiController::class, 'getRegencies']);
Route::get('/api/districts/{id}', [LokasiController::class, 'getDistricts']);
Route::get('/api/villages/{id}', [LokasiController::class, 'getVillages']);