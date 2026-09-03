<?php

namespace App\Http\Controllers\admin ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Masa_ekonomis;
use App\Kategori;

class MasaEkonomisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masaEkonomis = Masa_ekonomis::with('kategori')->get();
        return view('masa_ekonomis.index', compact('masaEkonomis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $kategori = Kategori::all();

        return view('masa_ekonomis.create', compact('kategori'));
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
            'kategori_id' => 'required|exists:kategoris,kategori_id',
            'lama_ekonomis' => 'required|integer',
            'satuan' => 'required',
            'keterangan' => 'nullable|string',
        ]);

        Masa_ekonomis::create([
            'kategori_id' => $request->kategori_id,
            'lama_ekonomis' => $request->lama_ekonomis,
            'satuan' => $request->satuan,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()
            ->route('admin.masa_ekonomis.index')
            ->with('success', 'Data masa ekonomis berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $masaEkonomis = Masa_ekonomis::findOrFail($id);
        $kategori = Kategori::all();

        return view('masa_ekonomis.edit', compact('masaEkonomis', 'kategori'));
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
            'kategori_id' => 'required|exists:kategoris,kategori_id',
            'lama_ekonomis' => 'required|integer',
            'satuan' => 'required',
            'keterangan' => 'nullable|string',
        ]);

        $masaEkonomis = Masa_ekonomis::findOrFail($id);

        $masaEkonomis->update([
            'kategori_id' => $request->kategori_id,
            'lama_ekonomis' => $request->lama_ekonomis,
            'satuan' => $request->satuan,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()
            ->route('admin.masa_ekonomis.index')
            ->with('success', 'Data masa ekonomis berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $masaEkonomis = Masa_ekonomis::findOrFail($id);

        $masaEkonomis->delete();

        return redirect()
            ->route('admin.masa_ekonomis.index')
            ->with('success', 'Data masa ekonomis berhasil dihapus.');
    }
}
