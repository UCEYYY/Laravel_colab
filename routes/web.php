<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/request1', function (Request $request) {
    $nama = request('nama');
    $umur = request('umur');
    $alamat = request('alamat');
    $hobi = request('hobi');
    $gambar = 'img/Gambar Anime (6).jpg'; 
    return view('index', compact('nama', 'umur', 'alamat', 'hobi', 'gambar'));   
});


Route::get('/for', function () {
    $nama = "Ikhwan Maulana Ivansyah";
    $NIM = ['SI20230016'];
    $jurusan = ['Sistem Informasi'];
    $semester = ['Semester 4'];
    $alamat = ['Desa Ganti, Praya Timur, Lombok Tengah, Nusa Tenggara Barat'];
    return view('for', compact('nama', 'NIM', 'jurusan', 'semester', 'alamat'));
});

Route::get('/profile', function (Request $request) {
    $nama = request('nama');
    $umur = request('umur');
    $alamat = request('alamat');
    $hobi = request('hobi');
    $gambar = 'img/75b38f47-c980-4b17-9a03-223f121c8a93.jpg'; 
    return view('profile', compact('nama', 'umur', 'alamat', 'hobi', 'gambar'));
});

Route::get('/request2', function () {
    $nama = request('nama');
    $umur = request('umur');
    $alamat = request('alamat');
    $hobi = request('hobi');
    $gambar = 'img/profil.jpeg'; 
    return view('index', compact('nama', 'umur', 'alamat', 'hobi', 'gambar'));
});
