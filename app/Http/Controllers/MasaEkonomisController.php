<?php

namespace App\Http\Controllers;

use App\Masa_ekonomis;
use Illuminate\Http\Request;

class MasaEkonomisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Masa_ekonomis = Masa_ekonomis::all();
        return view('masa_ekonomis.index', compact('masaEkonomis'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masa_ekonomis.create');
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
            'lama_ekonomis' => 'requiered|integer|min:1',
            'satuan' => 'required|string|max:20',
            'keterangan' => 'nullable|string',

        ]);

        Masa_ekonomis::create([
          'lama_ekonomis' => $request->lama_ekonomis,
          'satuan' => $request->satuan,
          'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('masa_ekonomis.index')->with('success', 'Masa Ekonomis berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        return view('masa_ekonomis.edit', compact('masaEkonomis'));
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
            'lama_ekonomis' => 'required|integer|min:1',
            'satuan' => 'required|string|max:20',
            'keterangan' => 'nullable|string',
        ]);
         $masaEkonomis = Masa_ekonomis::findOrFail($id);

         $masaEkonomis->update([
            'lama_ekonomis' => $request->lama_ekonomis,
            'satuan' => $request->satuan,
            'keterangan' => $request->keterangan,
         ]);

         return redirect()->route('masa_ekonomis.index')->with('success', 'Masa Ekonomis berhasil diperbarui.');
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
            ->route('masa-ekonomis.index')
            ->with('success', 'Masa ekonomis berhasil dihapus.');
    }
}