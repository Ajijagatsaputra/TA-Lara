<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/listmahasiswa', function () {
    return view('mahasiswa.index');
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
    return view('components.admin');
});

Route::get('/login', function () {
    return view('login');
});



