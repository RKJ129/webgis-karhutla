<?php

namespace App\Http\Controllers;

use App\Models\TitikPanas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TitikPanasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Data Titik Panas";
        $data_titik = TitikPanas::all();
        return view('titik_panas.index', [
            'title' => $title,
            'data_titik' => $data_titik,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Data Titik Panas";
        return view('titik_panas.create', [
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTitikPanasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = [
            'kecamatan' => "$request->kecamatan",
            'jenis' => "Kebakaran Hutan",
            'lokasi' => $request->lokasi_kejadian,
            'tanggal' => $request->tanggal_kejadian,
            'lat' => $request->lat,
            'long' => $request->long,
            'kerusakan' => $request->kerusakan,
        ];

        try {
            TitikPanas::create($data);
            return redirect()->route('index.titikpanas')->with('success', 'Data titik panas berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('index.titikpanas')->with('error', 'Ada yang salah, pastikan kembali ' . $th->getMessage());
        }
    }

    public function edit($id)
    {
        $data_titik = TitikPanas::where('id', $id)->first();
        $title = "Edit Data Titik Panas";
        return view('titik_panas.edit', [
            'title' => $title,
            'data' => $data_titik,
        ]);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            TitikPanas::where('id', $id)->update([
                'kecamatan' => "$request->kecamatan",
                'jenis' => "Kebakaran Hutan",
                'lokasi' => $request->lokasi_kejadian,
                'tanggal' => $request->tanggal_kejadian,
                'lat' => $request->lat,
                'long' => $request->long,
                'kerusakan' => $request->kerusakan,
            ]);
            DB::commit();
            return redirect()->route('index.titikpanas')->with('success', 'Data titik panas berhasil diubah');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('index.titikpanas')->with('error', 'Ada yang salah, pastikan kembali ' . $th->getMessage());
        }
    }

    public function destroy(TitikPanas $titikPanas, $id)
    {
        $titikPanas->where('id', $id)->delete();
        return redirect()->route('index.titikpanas')->with('success', 'Data titik panas berhasil dihapus.');
    }
}
