<?php

use App\Http\Controllers\AdminTracerController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\KuesionerAlumni;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TracerAlumniController;
use App\Http\Controllers\TracerStudyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

// ✅ Home: redirect ke dashboard sesuai role
Route::get('/', function () {
    if (Auth::check() && Auth::user()->role === 'admin') {
        return view('admin.admin-dashboard');
    } elseif (Auth::check() && Auth::user()->role === 'alumni') {
        return view('main');
    } else {
        return view('main');
    };
})->name('home')->middleware('auth');

// ✅ Auth
Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// ✅ Register (umum)
Route::get('/register', fn() => view('register'))->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);

// ✅ Admin-only routes
Route::middleware(['auth', 'cekrole:admin'])->group(function () {
    Route::get('/admin', function () {
        $response = Http::get('https://api.oase.poltektegal.ac.id/api/web/mahasiswa', [
            'key' => env('OASE_API_KEY'),
            'tahun_angkatan' => '2021'
        ]);
        $count = count($response->json()['data']);
        return view('admin.admin-dashboard', compact('count'));
    });

    Route::get('/listmahasiswa', fn() => view('mahasiswa.table-mahasiswa'));
    Route::get('/listdosen', fn() => view('dosen.table-dosen'));
    Route::get('/listalumni', fn() => view('alumni.table-alumni'));
    Route::get('/listtraceralumni', [TracerAlumniController::class, 'index'])->name('tracer.index');
    // Route::get('/listtracerpengguna', fn() => view('tracer.table-salinan-pengguna'));
    Route::get('/api/mahasiswa', [MahasiswaController::class, 'getData'])->name('api.mahasiswa');
    Route::get('/api/alumni', [TracerAlumniController::class, 'getData'])->name('api.alumni');
});

// ✅ Alumni-only routes
Route::middleware(['auth', 'cekrole:alumni'])->group(function () {
    Route::get('/kuesioner', [KuesionerAlumni::class, 'index'])->name('tracer.kuesioner');
    Route::post('/kuesioner/store', [KuesionerAlumni::class, 'store'])->name('tracer.store');
    Route::get('/kuesioner-pengguna', [TracerStudyController::class, 'index'])->name('tracer.kuesioner-pengguna');
    Route::post('/kuesioner-pengguna/store', [TracerStudyController::class, 'store'])->name('tracer.store');
});

// // ✅ Routes for authenticated users (admin & alumni)
// Route::middleware('auth')->group(function () {
//     Route::get('/kuesioner', fn() => view('components.kuesioner'));
//     Route::get('/kuesioner-pengguna', fn() => view('components.kuesioner-pengguna'));
//     Route::get('/profile', fn() => view('components.profile'));
// });

Route::resource('listtracerpengguna', AdminTracerController::class);