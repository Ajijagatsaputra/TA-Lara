<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\TracerStudy;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TracerAlumniController extends Controller
{

    public function index()
    {
        if (request()->ajax()) {
            $tracer = TracerStudy::with('alumni.mahasiswa')->get();
            // dd($tracer);
            return DataTables::of($tracer)
                ->addColumn('action', function ($tracer) {
                    return '<div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $tracer->id . '" data-original-title="Edit" class="edit btn btn-primary btn-xs">Edit</a>
                                    &nbsp;
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $tracer->id . '" data-original-title="Delete" class="delete btn btn-danger btn-xs">Delete</a>
                                </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('tracer.table-salinan-alumni');
    }

    

    public function getData()
    {
        if (request()->ajax()) {
            $tracer = Alumni::get();
            // dd($tracer);
            return DataTables::of($tracer)
                
                ->make(true);
        }
    }
}
