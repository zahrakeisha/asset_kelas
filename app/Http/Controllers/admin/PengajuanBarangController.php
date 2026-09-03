<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Pengajuan_barang;
use App\Models\Barang;
use Illuminate\Http\Request;

class PengajuanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajuan = Pengajuan_barang::with('barang')
            ->latest('tanggal_pengajuan')
            ->get();

        return view('admin.pengajuan_barang.index', compact('pengajuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();

        return view('admin.pengajuan_barang.create', compact('barang'));
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
            'barang_id' => 'required|exists:barangs,barang_id',
            'tanggal_pengajuan' => 'required|date',
            'jenis_pengajuan' => 'required|in:Perbaikan,Penggantian,Penambahan',
            'alasan' => 'required|string',
            'status' => 'nullable|in:Menunggu,Disetujui,Ditolak',
            'catatan' => 'nullable|string',
        ]);

        Pengajuan_barang::create([
            'barang_id' => $request->barang_id,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'jenis_pengajuan' => $request->jenis_pengajuan,
            'alasan' => $request->alasan,
            'status' => $request->status ?? 'Menunggu',
            'catatan' => $request->catatan,
        ]);

        return redirect()
            ->route('admin.pengajuan_barang.index')
            ->with('success', 'Pengajuan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengajuan = Pengajuan_barang::with('barang')
            ->findOrFail($id);

        return view('admin.pengajuan_barang.show', compact('pengajuan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengajuan = Pengajuan_barang::findOrFail($id);
        $barang = Barang::all();

        return view('admin.pengajuan_barang.edit', compact('pengajuan', 'barang'));
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
            'barang_id' => 'required|exists:barangs,barang_id',
            'tanggal_pengajuan' => 'required|date',
            'jenis_pengajuan' => 'required|in:Perbaikan,Penggantian,Penambahan',
            'alasan' => 'required|string',
            'status' => 'required|in:Menunggu,Disetujui,Ditolak',
            'catatan' => 'nullable|string',
        ]);

        $pengajuan = Pengajuan_barang::findOrFail($id);

        $pengajuan->update([
            'barang_id' => $request->barang_id,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'jenis_pengajuan' => $request->jenis_pengajuan,
            'alasan' => $request->alasan,
            'status' => $request->status,
            'catatan' => $request->catatan,
        ]);

        return redirect()
            ->route('admin.pengajuan_barang.index')
            ->with('success', 'Pengajuan barang berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengajuan = Pengajuan_barang::findOrFail($id);

        $pengajuan->delete();

        return redirect()
            ->route('admin.pengajuan_barang.index')
            ->with('success', 'Pengajuan barang berhasil dihapus.');
    }
}