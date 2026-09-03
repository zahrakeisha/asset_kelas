<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barang;
use App\Kategori;
use App\Masa_ekonomis;
use App\Ruangan;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $ruangan = Ruangan::all();
        $masa_ekonomis = Masa_ekonomis::all();

        return view('barang.create', compact(
            'kategori',
            'ruangan',
            'masa_ekonomis'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|unique:barangs,kode_barang',
            'nama_barang' => 'required',
            'kategori_id' => 'required',
            'ruangan_id' => 'required',
            'masa_ekonomis_id' => 'required',
            'jumlah' => 'required|integer|min:1',
            'kondisi' => 'required',
            'tanggal_perolehan' => 'nullable|date',
        ]);

        Barang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'merek' => $request->merek,
            'model' => $request->model,
            'serial_number' => $request->serial_number,
            'kategori_id' => $request->kategori_id,
            'ruangan_id' => $request->ruangan_id,
            'masa_ekonomis_id' => $request->masa_ekonomis_id,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'tanggal_perolehan' => $request->tanggal_perolehan,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()
            ->route('admin.barang.index')
            ->with('success', 'Data barang berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::with(['kategori', 'masaEkonomis'])->findOrFail($id);

        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $kategori = Kategori::all();
        $ruangan = Ruangan::all();
        $masa_ekonomis = Masa_ekonomis::all();

        return view('barang.edit', compact(
            'barang',
            'kategori',
            'ruangan',
            'masa_ekonomis'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_barang' => 'required|unique:barangs,kode_barang,' . $id . ',barang_id',
            'nama_barang' => 'required',
            'kategori_id' => 'required',
            'ruangan_id' => 'required',
            'masa_ekonomis_id' => 'required',
            'jumlah' => 'required|integer|min:1',
            'kondisi' => 'required',
            'tanggal_perolehan' => 'nullable|date',
        ]);

        $barang = Barang::findOrFail($id);

        $barang->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'merek' => $request->merek,
            'model' => $request->model,
            'serial_number' => $request->serial_number,
            'kategori_id' => $request->kategori_id,
            'ruangan_id' => $request->ruangan_id,
            'masa_ekonomis_id' => $request->masa_ekonomis_id,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'tanggal_perolehan' => $request->tanggal_perolehan,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()
            ->route('admin.barang.index')
            ->with('success', 'Data barang berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()
            ->route('admin.barang.index')
            ->with('success', 'Data barang berhasil dihapus.');
    }
}
