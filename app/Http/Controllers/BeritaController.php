<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index() {
        $dataBerita = Berita::all();
        return view('berita.index', compact('dataBerita'));
    }

    public function create() {
        return view('berita.create');
    }

    public function store(Request $request) {
        Berita::create($request->all());
        return redirect()->route('berita.index')->with('success', 'Berhasil Menambahkan Data Berita');
    }

    public function edit($id) {
        $dataBerita = Berita::findOrFail($id);
        return view('berita.edit', compact('dataBerita'));
    }

    public function update(Request $request, $id) {
        $dataBerita = Berita::findOrFail($id);
        $dataBerita->update($request->all());
        return redirect()->route('berita.index')->with('success', 'Data Berita Berhasil Diubah');
    }

    public function destroy($id) {
        $dataBerita = Berita::findOrFail($id);
        $dataBerita->delete();
        return redirect()->route('berita.index')->with('success', 'Data Berita Berhasil Dihapus');
    }
}
