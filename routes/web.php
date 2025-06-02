<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/listmahasiswa', function () {
    return view('table-mahasiswa');
});

// Route::get('/kemahasiswaan', [KemahasiswaanController::class, 'index'])->name('kemahasiswaan');

Route::get('/kuesioner', function () {
    return view('components.kuesioner');
});

Route::get('/kuesioner-pengguna', function () {
    return view('components.kuesioner-pengguna');
});

Route::get('/profile', function () {
    return view('components.profile');
});

Route::get('/admin', function () {
    return view('admin.admin-dashboart');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/listmahasiswa', function () {
    return view('admin.table-mahasiswa');
});
Route::get('/data-dosen', function () {
    return view('admin.table-dosen');
});
Route::get('/data-alumni', function () {
    return view('admin.table-alumni');
});