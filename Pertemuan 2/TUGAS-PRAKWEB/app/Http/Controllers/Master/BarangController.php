<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Master\barang;

class barangController extends Controller
{
    public function index()
    {
        $barang = barang::all();

        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $barang = new barang();
        $barang->uuid = Str::uuid();
        $barang->nama = $request->nama ?? null;
        $barang->jenis = $request->jenis ?? null;
        $barang->kode = $request->kode ?? null;
        $barang->save();

        return redirect()->route('index.barang')->with('berhasil', 'Data berhasil ditambahkan!');
    }

    public function edit($uuid)
    {
        $barang = barang::where('uuid', $uuid)->first();

        if (!$barang) {
            return redirect()->back()->with('gagal', 'Data tidak ditemukan!');
        }

        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $uuid)
    {
        $barang = barang::where('uuid', $uuid)->first();

        if (!$barang) {
            return redirect()->back()->with('gagal', 'Data tidak ditemukan!');
        }

        $barang->nama = $request->nama ?? null;
        $barang->jenis = $request->jenis ?? null;
        $barang->kode = $request->kode ?? null;
        $barang->save();

        return redirect()->route('index.barang')->with('berhasil', 'Data berhasil diubah!');
    }

    public function delete($uuid)
    {
        $barang = barang::where('uuid', $uuid)->first();

        if (!$barang) {
            return redirect()->back()->with('gagal', 'Data tidak ditemukan!');
        }

        barang::where('uuid', $uuid)->delete();

        return redirect()->route('index.barang')->with('berhasil', 'Data berhasil dihapus!');
    }
}
