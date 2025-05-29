<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
route::resource('post', 'PostController');

Route::get('/for', function () {
    $nama = "Ikhwan Maulana Ivansyah";
    $NIM = ['SI20230016'];
    $jurusan = ['Sistem Informasi'];
    $semester = ['Semester 4'];
    $alamat = ['Desa Ganti, Praya Timur, Lombok Tengah, Nusa Tenggara Barat'];
    return view('for', compact('nama', 'NIM', 'jurusan', 'semester', 'alamat'));
});
