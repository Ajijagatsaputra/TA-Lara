<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/listmahasiswa', function () {
    return view('admin.table-mahasiswa');
});

Route::get('/listdosen', function () {
    return view('dosen.table-dosen');
});

Route::get('/listtraceralumni', function () {
    return view('tracer.table-salinan-alumni');
});

Route::get('/listtracerpengguna', function () {
    return view('tracer.table-salinan-pengguna');
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
    return view('admin.admin-dashboard');
});

Route::get('/login', function () {
    return view('login');
});