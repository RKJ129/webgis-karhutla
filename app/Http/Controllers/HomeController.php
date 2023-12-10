<?php

namespace App\Http\Controllers;

use App\Models\Kebakaran;
use App\Models\Kecamatan;
use App\Models\TitikPanas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('user.index');
    }

    public function pemetaan() {
        $data_kecamatan = Kecamatan::all();
        $dataPeta = TitikPanas::all();
        $dataTitikPanas = TitikPanas::paginate(10);
        return view('user.pemetaan', compact('dataTitikPanas', 'data_kecamatan', 'dataPeta'));
    }

    public function kebakaran() {
        $dataTitikPanas = TitikPanas::paginate(10);
        $dataKebakaran = Kebakaran::all();
        return view('user.kebakaran', compact('dataKebakaran', 'dataTitikPanas'));
    }

    public function berita() {
        return view('user.berita');
    }

    public function kontak() {
        return view('user.kontak');
    }
}
