<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    $response = Http::get('https://api.oase.poltektegal.ac.id/api/web/mahasiswa', [
        'key' => env('OASE_API_KEY'),
            'tahun_angkatan' => '2021'

    ]);
    $count = count($response->json()['data']);
    // dd($count);
    return view('admin.admin-dashboard', compact('count'));
});

Route::get('/listmahasiswa', function () {
    return view('mahasiswa.table-mahasiswa');
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

Route::get('/', function () {
    if (Auth::check() && Auth::user()->role === 'admin') {
        return view('admin.admin-dashboard');
    } elseif (Auth::check() && Auth::user()->role === 'alumni') {
        return view('main');
    } else {
        return view('main');
    };
}) ->name('home')->middleware('auth');
Route::get('/api/mahasiswa', [MahasiswaController::class, 'getData'])->name('api.mahasiswa');

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);


Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');