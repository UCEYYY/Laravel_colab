<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::get('/home', function () {
    return view('tentang');
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
=======
route::resource('post', 'PostController');

Route::get('/for', function () {
    $nama = "Ikhwan Maulana Ivansyah";
    $NIM = ['SI20230016'];
    $jurusan = ['Sistem Informasi'];
    $semester = ['Semester 4'];
    $alamat = ['Desa Ganti, Praya Timur, Lombok Tengah, Nusa Tenggara Barat'];
    return view('for', compact('nama', 'NIM', 'jurusan', 'semester', 'alamat'));
>>>>>>> 9546c2140def08f279ad2451008a1420e4f91f4b
});
