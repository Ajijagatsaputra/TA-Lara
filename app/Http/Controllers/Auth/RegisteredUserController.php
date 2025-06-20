<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data input dari form registrasi
        $request->validate([
            'nim' => ['required'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'tahun_angkatan' => ['required']
        ]);

        // Panggil API OASE untuk mendapatkan data mahasiswa
        $response = Http::get('https://api.oase.poltektegal.ac.id/api/web/mahasiswa', [
            'key' => env('OASE_API_KEY'),
            'nim' => $request->nim,
            'tahun_angkatan' => $request->tahun_angkatan
        ]);

        // Tangani jika status API false (NIM tidak ditemukan atau mahasiswa belum lulus)
        if ($response->json()['status'] === false) {
            return back()->withErrors([
                'nim' => 'NIM tidak ditemukan atau mahasiswa belum lulus',
            ]);
        }
        // Tangani jika status mahasiswa di API belum 'Lulus'
        elseif ($response->json()['data'][0]['status_mahasiswa'] !== 'Lulus') {
            return back()->withErrors([
                'nim' => 'Mahasiswa belum lulus',
            ]);
        }
        // Proses registrasi jika data valid dan mahasiswa sudah lulus
        else {
            $apiData = $response->json()['data'][0]; // Simpan data API untuk akses mudah

            // Buat user baru
            $user = User::create([
                'username' => str_replace(' ', '', strtolower($apiData['nama_lengkap'])),
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Siapkan data untuk model Alumni
            $alumniData = [
                'id_users' => $user->id,
                'nim' => $apiData['nim'],
                'nama_lengkap' => $apiData['nama_lengkap'],
                'prodi' => $apiData['prodi']['nama'],
                'kelas' => $apiData['kelas'],
                'jalur' => $apiData['jalur'],
                'tahun_masuk' => $apiData['tahun_masuk'],
                'status_mahasiswa' => $apiData['status_mahasiswa'],
                // Gunakan operator null coalescing untuk menangani kunci yang mungkin tidak ada
                'tahun_lulus' => $apiData['tahun_lulus'] ?? null,
                'no_hp' => $apiData['no_hp'] ?? null,
            ];

            // Buat entri alumni baru
            $alumni = Alumni::create($alumniData); // Pastikan semua field yang required ada di $alumniData

            // Event registrasi dan login user
            event(new Registered($user));
            Auth::login($user);

            // Redirect ke halaman home setelah registrasi berhasil
            return redirect(route('home', absolute: false));
        }
    }
}
