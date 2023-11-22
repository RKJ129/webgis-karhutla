<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;


class KelurahanController extends Controller
{
    public function index()
    {

        $data_kelurahan = Kelurahan::all();
        $title = "Data Kelurahan";
        return view('kelurahan.index', [
            'title' => $title,
            'data_kelurahan' => $data_kelurahan,
        ]);
    }

    public function create()
    {
        $title = "Tambah Data Kelurahan";
        return view('kelurahan.create', [
            'title' => $title,
        ]);
    }

    public function store(Request $request)
    {
        $data = [
            'nama_kelurahan' => $request->nama_kelurahan,
        ];

        try {
            Kelurahan::create($data);
            return redirect()->route('index.kelurahan')->with('success', 'Data kelurahan berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('index.kelurahan')->with('error', 'Ada yang salah, pastikan kembali ' . $th->getMessage());
        }
    }
}
