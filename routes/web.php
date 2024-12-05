<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home1', function () {
    return view('home1');
});

Route::get('/user', function () {
    return view('user.blog');
});

Route::get('/user/1', function () {
    return view('user.menuPembayaran');
});

Route::get('/siswa', function () {
    return view('siswa.gabungKelas');
});

Route::get('/siswa/1', function () {
    return view('siswa.timeLine');
});

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
    return view('profile');
});



Route::get('/guru', function () {
    return view('guru.Home');
});

Route::get('/guru/1', function () {
    return view('guru.timeLine');
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

Route::get('/guru/5', function () {
    return view('guru.daftarPesanan');
});

Route::get('/guru/6', function () {
    return view('guru.tambahMateri');
});

Route::get('/guru/7', function () {
    return view('guru.tambahMateri2');
});

Route::get('/guru/8', function () {
    return view('guru.tambahMateri3');
});

Route::get('/guru/9', function () {
    return view('guru.tambahMateri4');
});

Route::get('/guru/10', function () {
    return view('guru.Materi2');
});

Route::get('/login', function () {
    return view('login');
});
