<?php

namespace App\Http\Controllers;

use App\Models\Kebakaran;
use Illuminate\Http\Request;

class KebakaranController extends Controller
{
    public function index()
    {
        $dataKebakaran = Kebakaran::all();
        return view('kebakaran.index', compact('dataKebakaran'));
    }

    public function create()
    {
        return view('kebakaran.create');
    }

    public function store(Request $request)
    {
        Kebakaran::create($request->all());
        return redirect()->route('kebakaran.index')->with('success', 'Data Kebakaran Berhasil Ditambah');
    }

    public function edit($id)
    {
        $dataKebakaran = Kebakaran::findOrFail($id);
        return view('kebakaran.edit', compact('dataKebakaran'));
    }

    public function update(Request $request, $id) {
        $dataKebakaran = Kebakaran::findOrFail($id);
        $dataKebakaran->update($request->all());
        return redirect()->route('kebakaran.index')->with('success', 'Data Kebakaran Berhasil Diubah');
    }

    public function destroy($id) {
        $dataKebakaran = Kebakaran::findOrFail($id);
        $dataKebakaran->delete();
        return redirect()->route('kebakaran.index')->with('success', 'Data Kebakaran Berhasil Dihapus');
    }
}
