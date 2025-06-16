<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\tracer_pengguna;
use Illuminate\Http\Request;

class TracerStudyController extends Controller
{
    // Menampilkan semua data tracer
    public function index(Request $request)
    {
        $query = tracer_pengguna::query();
    
        // Filter berdasarkan prodi jika ada
        if ($request->has('prodi')) {
            $query->byProdi($request->prodi);
        }
    
        // Filter berdasarkan tahun jika ada
        if ($request->has('tahun')) {
            $query->byYear($request->tahun);
        }
    
        $data = $query->latest()->paginate(10);
    
        // INI BAGIAN TERPENTING: ambil data alumni yang login
        $user = auth()->user();
        $alumni = Alumni::where('id_users', $user->id)->first();
    
        return view('components.kuesioner-pengguna', compact('data', 'alumni'));
    }
    

    // Menampilkan form input
    public function create()
    {
        return view('components.kuesioner-pengguna');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'prodi' => 'required|string',
            'jabatan' => 'nullable|string',
            'integritas' => 'required|string',
            'keahlian' => 'required|string',
            'kemampuan' => 'required|string',
            'penguasaan' => 'required|string',
            'komunikasi' => 'required|string',
            'kerja_tim' => 'required|string',
            'pengembangan' => 'required|string',
            'nama_atasan' => 'nullable|string',
            'nip_atasan' => 'nullable|string',
            'posisi_jabatan_atasan' => 'nullable|string',
            'nama_perusahaan' => 'nullable|string',
            'alamat_perusahaan' => 'nullable|string',
            'saran' => 'nullable|string'
        ]);

        tracer_pengguna::create($request->all());

        // return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data.']);
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    // Menampilkan detail satu data
    public function show($id)
    {
        $data = tracer_pengguna::findOrFail($id);
        return view('tracer.pengguna.detail-salinan-table', compact('data'));
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $data = tracer_pengguna::findOrFail($id);
        return view('tracer.edit', compact('data'));
    }

    // Memperbarui data
    public function update(Request $request, $id)
    {
        $data = tracer_pengguna::findOrFail($id);

        $data->update($request->all());

        return redirect()->route('tracer.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus data
    public function destroy($id)
    {
        $data = tracer_pengguna::findOrFail($id);
        $data->delete();

        return redirect()->route('tracer.index')->with('success', 'Data berhasil dihapus.');
    }
}