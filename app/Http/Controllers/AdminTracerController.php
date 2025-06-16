<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tracer_pengguna;
use Illuminate\Http\Request;

class AdminTracerController extends Controller
{
    /**
     * Menampilkan data tracer untuk admin
     */
    public function index(Request $request)
    {
        $query = tracer_pengguna::query();

        // Filter berdasarkan prodi jika ada
        if ($request->filled('prodi')) {
            $query->where('prodi', $request->prodi);
        }

        // Filter berdasarkan status jika ada
        if ($request->filled('status')) {
            if ($request->status == 'sudah_mengisi') {
                $query->whereNotNull('created_at');
            }
        }

        // Filter berdasarkan tahun jika ada
        if ($request->filled('tahun')) {
            $query->whereYear('created_at', $request->tahun);
        }

        // Search berdasarkan nama atau NIM
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('nama', 'like', '%' . $request->search . '%')
                  ->orWhere('nim', 'like', '%' . $request->search . '%');
            });
        }

        $data = $query->latest()->paginate(10);
        
        // Ambil data untuk filter dropdown
        $prodis = tracer_pengguna::distinct()->pluck('prodi');
        $tahuns = tracer_pengguna::selectRaw('YEAR(created_at) as tahun')
                                ->distinct()
                                ->orderBy('tahun', 'desc')
                                ->pluck('tahun');

        return view('tracer.table-salinan-pengguna', compact('data', 'prodis', 'tahuns'));
    }

    /**
     * Menampilkan detail data tracer
     */
    public function show($id)
    {
        $data = tracer_pengguna::findOrFail($id);
        return view('tracer.pengguna.detail-salinan-table', compact('data'));
    }

    /**
     * Menampilkan form edit data tracer
     */
    public function edit($id)
    {
        $data = tracer_pengguna::findOrFail($id);
        return view('admin.pengguna.edit-salinan-table', compact('data'));
    }

    /**
     * Update data tracer
     */
    public function update(Request $request, $id)
    {
        $data = tracer_pengguna::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'alamat' => 'required|string',
            'prodi' => 'required|string',
            'jabatan' => 'nullable|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
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

        $data->update($request->all());

        return redirect()->route('admin.tracer.index')
                        ->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Hapus data tracer
     */
    public function destroy($id)
    {
        $data = tracer_pengguna::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.tracer.index')
                        ->with('success', 'Data berhasil dihapus.');
    }

    /**
     * Export data tracer
     */
    public function export(Request $request)
    {
        $query = tracer_pengguna::query();

        // Apply same filters as index
        if ($request->filled('prodi')) {
            $query->where('prodi', $request->prodi);
        }

        if ($request->filled('tahun')) {
            $query->whereYear('created_at', $request->tahun);
        }

        $data = $query->get();

        // Return as JSON for DataTables export or implement Excel/PDF export
        return response()->json($data);
    }

    /**
     * Get statistics for dashboard
     */
    public function getStatistics()
    {
        $total = tracer_pengguna::count();
        $thisMonth = tracer_pengguna::whereMonth('created_at', now()->month)
                                   ->whereYear('created_at', now()->year)
                                   ->count();
        $byProdi = tracer_pengguna::selectRaw('prodi, COUNT(*) as total')
                                  ->groupBy('prodi')
                                  ->get();

        return [
            'total' => $total,
            'this_month' => $thisMonth,
            'by_prodi' => $byProdi
        ];
    }
}