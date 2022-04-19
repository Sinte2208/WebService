<?php

use App\Http\Controllers\MahasiswaC;
use App\Http\Controllers\ProfileC;
use App\Http\Controllers\soalcontroller;
use App\Http\Controllers\SoalController as ControllersSoalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('soal.index');
})->name('utama');

Route::get('/about', function(){
    return view('about');
})->name('tentang-saya');

Route::get('/profile',[ProfileC::class,'index']);

Route::get('/nama', function(){
    return 'Sinte Suandika';
});

Route::get('/dari-view', function(){
    return view('home');
});

Route::view('master', 'template/master');

//route untuk mahasiswa
Route::get('data-mahasiswa', [MahasiswaC::class, 'index']);
Route::get('add-mahasiswa', [MahasiswaC::class, 'create']);
Route::post('simpan-mahasiswa', [MahasiswaC::class, 'store']);
Route::delete('delete-mahasiswa/{id}', [MahasiswaC::class, 'destroy'])->name('delete.mahasiswa');

//route untuk soal
Route::get('data-soal', [SoalController::class, 'index']);
Route::get('tambah-soal', [SoalController::class, 'create']);
Route::post('simpan-soal', [SoalController::class, 'store']);
Route::delete('delete-soal/{id}', [SoalController::class, 'destroy'])->name('delete.soal');