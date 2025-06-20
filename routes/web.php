<?php

use App\Http\Controllers\AdminTracerController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KuesionerAlumni;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TracerAlumniController;
use App\Http\Controllers\TracerStudyController;
use App\Models\TracerStudy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    if (Auth::check() && Auth::user()->role === 'admin') {
        $key = env('OASE_API_KEY');

        $countMahasiswa = 0;
        $countDosen = 0;
        $countAlumni = 0;

        // ✅ Mahasiswa (dengan parameter tahun_angkatan)
        $countMahasiswa = 0;
        for ($tahun = 2020; $tahun <= 2025; $tahun++) {
            $res = Http::get('https://api.oase.poltektegal.ac.id/api/web/mahasiswa', [
                'key' => $key,
                'tahun_angkatan' => $tahun
            ]);

            if ($res->successful() && isset($res['data'])) {
                $countMahasiswa += count($res['data']);
            }
        }


        //Dosen berdasarkan kd_prodi dan kode_tahun_akademik
        $kodeProdi = '09';
        $tahunAkademikList = ['20201', '20211', '20221', '20231', '20241', '20251'];

        foreach ($tahunAkademikList as $kodeTA) {
            $resDosen = Http::get('https://api.oase.poltektegal.ac.id/api/web/dosen', [
                'key' => $key,
                'kd_prodi' => $kodeProdi,
                'kode_tahun_akademik' => $kodeTA
            ]);

            if ($resDosen->successful() && isset($resDosen['data'])) {
                $countDosen += count($resDosen['data']);
            }
        }

        // Alumni angkatan 2020–2025
        $countAlumni = 0;
        for ($tahun = 2020; $tahun <= 2025; $tahun++) {
            $resAlumni = Http::get('https://api.oase.poltektegal.ac.id/api/web/alumni', [
                'key' => $key,
                'tahun_angkatan' => $tahun
            ]);

            if ($resAlumni->successful() && isset($resAlumni['data'])) {
                $countAlumni += count($resAlumni['data']);
            }
        }

        // Statistik alumni dari kolom 'bekerja'
        $bekerja = TracerStudy::where('bekerja', 'ya')->count();
        $belum = TracerStudy::where('bekerja', 'tidak')->count();
        $total = $bekerja + $belum;

        $statistikAlumni = [
            'Bekerja' => $total ? round(($bekerja / $total) * 100, 1) . '%' : '0%',
            'Belum Bekerja' => $total ? round(($belum / $total) * 100, 1) . '%' : '0%',
            'Wirausaha' => '0%' // Jika ingin tambah kategori ini, kamu bisa cek kolom atau buat filter sendiri
        ];

        return view('admin.admin-dashboard', compact('countMahasiswa', 'countDosen', 'countAlumni', 'statistikAlumni'));
    }

    return view('main');
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
    Route::get('/api/dosen', [DosenController::class, 'getDataDosen'])->name('api.dosen');
    Route::get('/api/tahun-akademik', [DosenController::class, 'getTahunAkademik'])->name('api.tahun-akademik');
});

// ✅ Alumni-only routes
Route::middleware(['auth', 'cekrole:alumni'])->group(function () {
    Route::get('/kuesioner', [KuesionerAlumni::class, 'index'])->name('tracer.kuesioner');
    Route::post('/kuesioner/store', [KuesionerAlumni::class, 'store'])->name('tracer.create');
    Route::get('/kuesioner-pengguna', [TracerStudyController::class, 'index'])->name('tracer.kuesioner-pengguna');
    Route::post('/kuesioner-pengguna/store', [TracerStudyController::class, 'store'])->name('tracer.store');
    Route::get('/tracer-study/form/{id}', [TracerStudyController::class, 'showStudy'])->name('tracer.showstudy');
    Route::get('/tracer-pengguna/form/{id}', [TracerStudyController::class, 'showPengguna'])->name('tracer.showpengguna');
});

// ✅ Routes for authenticated users (admin & alumni)
Route::middleware('auth')->group(function () {
    // Route::get('/kuesioner', fn() => view('components.kuesioner'));
    // Route::get('/kuesioner-pengguna', fn() => view('components.kuesioner-pengguna'));
    Route::get('/profile', fn() => view('components.profile'));
});

Route::resource('listtracerpengguna', AdminTracerController::class);
