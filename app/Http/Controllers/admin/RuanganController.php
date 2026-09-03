<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ruangan;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruangan = Ruangan::with('barang')->get();
        return view ('ruangan.index', compact('ruangan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruangan.create');
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
            'nama_ruangan' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        Ruangan::create([
            'nama_ruangan' => $request->nama_ruangan,
            'keterangan' => $request->keterangan, 
        ]);

        return redirect()
        ->route('admin.ruangan.index')
        ->with('success', 'Data ruangan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ruangan = Ruangan::with('barang')->findOrFail($id);
        return view('ruangan.show', compact('ruangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        return view('ruangan.edit', compact('ruangan'));
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
            'nama_ruangan' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        $ruangan = Ruangan::findOrFail($id);

        $ruangan->update([
            'nama_ruangan' => $request->nama_ruangan,
            'keterangan' => $request->keterangan,
        ]);

       return redirect()
            ->route('admin.ruangan.index')
            ->with('success', 'Data ruangan berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruangan = Ruangan::findOrFail($id);

        $ruangan->delete();

        return redirect()
        ->route('admin.ruangan.index')
        ->with('success', 'Data ruangan berhasil ditambahkan.');
    }
}
