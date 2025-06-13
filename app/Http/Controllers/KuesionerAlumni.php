<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\TracerStudy;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

        try {
            DB::beginTransaction();

            // Dapatkan data alumni
            $alumni = Alumni::where('id_users', auth()->user()->id)->first();

            if (!$alumni) {
                throw new \Exception('Data alumni tidak ditemukan');
            }

            // Update data alumni
            $alumni->update([
                'nama_lengkap' => $validated['nama'],
                'no_hp' => $validated['no_hp'],
                'tahun_lulus' => $validated['tahun_lulus'],
                'alamat' => $validated['alamat'],
            ]);

            // Update data user
            User::where('id', auth()->user()->id)->update([
                'email' => $validated['email'],
            ]);

            // Cek apakah sudah pernah mengisi tracer study
            $existingTracer = TracerStudy::where('id_alumni', $alumni->id)->first();

            if ($existingTracer) {
                // Update jika sudah ada
                $existingTracer->update([
                    'tanggal_isi' => now(),
                    'bekerja' => $validated['bekerja'],
                    'nama_perusahaan' => $validated['nama_perusahaan'],
                    'jabatan' => $validated['jabatan'],
                    'alamat_pekerjaan' => $validated['alamat_pekerjaan'],
                    'gaji' => $validated['gaji'] ? str_replace(['Rp', '.', ',', ' '], '', $validated['gaji']) : null,
                    'status_kerja' => $validated['bekerja'] === 'ya' ? 'aktif' : 'tidak_aktif',
                    'relevansi_pekerjaan' => $validated['relevansi_kurikulum'],
                    'saran' => $validated['saran'],
                ]);
            } else {
                // Buat baru jika belum ada
                TracerStudy::create([
                    'id_alumni' => $alumni->id, // PENTING: Tambahkan id_alumni
                    'tanggal_isi' => now(),
                    'bekerja' => $validated['bekerja'],
                    'nama_perusahaan' => $validated['nama_perusahaan'],
                    'jabatan' => $validated['jabatan'],
                    'alamat_pekerjaan' => $validated['alamat_pekerjaan'],
                    'gaji' => $validated['gaji'] ? str_replace(['Rp', '.', ',', ' '], '', $validated['gaji']) : null,
                    'status_kerja' => $validated['bekerja'] === 'ya' ? 'aktif' : 'tidak_aktif',
                    'relevansi_pekerjaan' => $validated['relevansi_kurikulum'],
                    'saran' => $validated['saran'],
                ]);
            }

            DB::commit();

            return redirect()->route('home')->with('success', 'Kuesioner berhasil disimpan!');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Error saat menyimpan tracer study: ' . $e->getMessage());

            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $tracer = TracerStudy::findOrFail($id);
        $tracer->delete();

        return response()->json(['message' => 'Data berhasil dihapus.']);
    }
}
