<?php

use Illuminate\Support\Facades\Request;
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

Route::get('/request1', function (Request $request) {
    $nama = request('nama');
    $umur = request('umur');
    $alamat = request('alamat');
    $hobi = request('hobi');
    $gambar = 'img/Gambar Anime (6).jpg'; 
    return view('index', compact('nama', 'umur', 'alamat', 'hobi', 'gambar'));   
});