<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/request2', function () {
    $nama = request('nama');
    $umur = request('umur');
    $alamat = request('alamat');
    $hobi = request('hobi');
    $gambar = 'img/profil.jpeg'; 
    return view('index', compact('nama', 'umur', 'alamat', 'hobi', 'gambar'));
});
