<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    return view('welcome');
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

route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

