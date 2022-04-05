<?php

use App\Http\Controllers\ProfileC;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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