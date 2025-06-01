<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::all();
        return view('alumni.index', compact('alumnis'));
    }

    public function create()
    {
        return view('alumni.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'email' => 'required|email',
            'tahun_lulus' => 'required|numeric|min:2000|max:2099',
            'alamat' => 'required|string|max:255',
        ]);

        Alumni::create($request->all());

        return redirect()->route('alumni.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show(Alumni $alumni)
    {
        return view('alumni.show', compact('alumni'));
    }

    public function edit(Alumni $alumni)
    {
        return view('alumni.edit', compact('alumni'));
    }

    public function update(Request $request, Alumni $alumni)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'email' => 'required|email',
            'tahun_lulus' => 'required|numeric|min:2000|max:2099',
            'alamat' => 'required|string|max:255',
        ]);

        $alumni->update($request->all());

        return redirect()->route('alumni.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(Alumni $alumni)
    {
        $alumni->delete();

        return redirect()->route('alumni.index')->with('success', 'Data berhasil dihapus.');
    }
}
