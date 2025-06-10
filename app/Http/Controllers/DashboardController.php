<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.oase.poltektegal.ac.id/api/web/mahasiswa', [
            'key' => env('OASE_API_KEY'),
        ]);

        return view('admin.admin-dashboard');
    }
}
