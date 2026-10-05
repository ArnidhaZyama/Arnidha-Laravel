<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/pcr', function () {
    return 'Selamat datang di website kampus PCR';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya : ' . $param1;
});

Route::get('/nim/{param1}', function ($param1) {
    return 'NIM saya : ' . $param1;
});

Route::get('/mahasiswa/{param1}', [App\Http\Controllers\mahasiswaController::class, 'show'])->name('mahasiswa.show');

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/about', function () {
    return view('halaman-mahasiswa-profil');
});

Route::get('/about', function () {
    return view('halaman-mahasiswa-detail');
});
