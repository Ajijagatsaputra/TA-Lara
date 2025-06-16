<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\TracerStudy;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TracerAlumniController extends Controller
{
    // Menampilkan halaman dengan DataTables
    public function index()
    {
        if (request()->ajax()) {
            // Ambil data tracer study beserta relasi alumni dan users
            $tracer = TracerStudy::with('alumni.users')->get();

            return DataTables::of($tracer)
                ->addColumn('nama_alumni', function ($row) {
                    return $row->alumni && $row->alumni->users
                        ? $row->alumni->users->name
                        : '-';
                })
                ->addColumn('action', function ($row) {
                    return '<button class="btn btn-sm btn-primary">Detail</button>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('tracer.table-salinan-alumni');
    }

    // Contoh fungsi lain untuk data alumni (jika dibutuhkan)
    public function getData()
    {
        if (request()->ajax()) {
            $alumni = Alumni::with('users')->get();

            return DataTables::of($alumni)
                ->addColumn('nama', function ($row) {
                    return $row->users ? $row->users->name : '-';
                })
                ->make(true);
        }
    }
}