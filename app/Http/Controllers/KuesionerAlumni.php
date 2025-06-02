<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\TracerStudy;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KuesionerAlumni extends Controller
{
    public function index()
    {
        $alumni = Alumni::where('id_users', auth()->user()->id)->first();
        return view('components.kuesioner', compact('alumni'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'no_hp' => ['required'],
            'email' => ['required', 'email', 'max:255'],
            'tahun_lulus' => ['required', 'integer'],
            'alamat' => ['required', 'string', 'max:255'],
            'bekerja' => ['required', 'string', 'in:ya,tidak'],
            'nama_perusahaan' => ['nullable', 'string', 'max:255'],
            'jabatan' => ['nullable', 'string', 'max:255'],
            'alamat_pekerjaan' => ['nullable', 'string', 'max:255'],
            'gaji' => ['nullable', 'string', 'max:255'],
            'relevansi_kurikulum' => ['required', 'string', 'in:sangat_relevan,relevan,cukup,tidak_relevan,sangat_tidak_relevan'],
            'saran' => ['nullable', 'string', 'max:500'],
            
        ]);

        // dd($validated);


        // Update data alumni
        try {
            DB::beginTransaction();

            Alumni::where('id_users', auth()->user()->id)->update([
                'nama_lengkap' => $validated['nama'],
                'no_hp' => $validated['no_hp'],
                'tahun_lulus' => $validated['tahun_lulus'],
                'alamat' => $validated['alamat'],
            ]);

            User::where('id', auth()->user()->id)->update([
                'email' => $validated['email'],
            ]);

            // Simpan data tracer study
            TracerStudy::create([
                'id_alumni' => Alumni::where('id_users', auth()->user()->id)->first()->id,
                'tanggal_isi' => now(),
                'bekerja' => $validated['bekerja'],
                'nama_perusahaan' => $validated['nama_perusahaan'],
                'jabatan' => $validated['jabatan'],
                'alamat_pekerjaan' => $validated['alamat_pekerjaan'],
                'gaji' => $validated['gaji'],
                'relevansi_pekerjaan' => $validated['relevansi_kurikulum'],
                'saran' => $validated['saran'],
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            // Handle exception, e.g., log the error or return an error response
            dd($e);
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data.']);
        }

        return redirect(route('home'));
    }
}
