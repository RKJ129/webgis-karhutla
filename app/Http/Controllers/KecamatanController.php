<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KecamatanController extends Controller
{
    public function index()
    {
        $data_kecamatan = Kecamatan::all();
        $title = "Data Kecamatan";
        return view('kecamatan.index', [
            'title' => $title,
            'data_kecamatan' => $data_kecamatan,
        ]);
    }

    public function create()
    {
        $title = "Tambah Data Kecamatan";
        return view('kecamatan.create', [
            'title' => $title,
        ]);
    }

    public function edit($id)
    {
        $data_kecamatan = Kecamatan::where('id', $id)->first();
        $title = "Edit Data Kecamatan";
        return view('kecamatan.edit', [
            'title' => $title,
            'data' => $data_kecamatan,
        ]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $data = [
            'nama_kecamatan' => $request->nama_kecamatan,
            'color' => $request->warna,
        ];

        try {
            Kecamatan::create($data);
            DB::commit();
            return redirect()->route('index.kecamatan')->with('success', 'Data kecamatan berhasil ditambahkan');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('index.kecamatan')->with('error', 'Ada yang salah, pastikan kembali ' . $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            Kecamatan::where('id', $id)->update([
                'nama_kecamatan' => $request->nama_kecamatan,
                'color' => $request->warna,
            ]);
            DB::commit();
            return redirect()->route('index.kecamatan')->with('success', 'Data kecamatan berhasil diubah');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('index.kecamatan')->with('error', 'Ada yang salah, pastikan kembali ' . $th->getMessage());
        }
    }

    public function destroy(Kecamatan $kecamatan, $id)
    {
        $kecamatan->where('id', $id)->delete();
        return redirect()->route('index.kecamatan')->with('success', 'Data Kecamatan berhasil dihapus.');
    }
}
