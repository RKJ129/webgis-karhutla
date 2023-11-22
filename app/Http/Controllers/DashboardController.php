<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\TitikPanas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data_kecamatan = Kecamatan::all();
        $data_titik = TitikPanas::all();
        $title = "Dashboard";
        return view('dashboard.index', [
            'title' => $title,
            'data_kecamatan' => $data_kecamatan,
            'data_titik' => $data_titik,
        ]);
    }
}
