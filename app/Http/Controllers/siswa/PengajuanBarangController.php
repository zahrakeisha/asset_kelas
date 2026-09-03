<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use App\Pengajuan_barang;
use App\Barang;
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

        return view('siswa.pengajuan_barang.index', compact('pengajuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();

        return view('siswa.pengajuan_barang.create', compact('barang'));
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
        ]);

        Pengajuan_barang::create([
            'barang_id' => $request->barang_id,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'jenis_pengajuan' => $request->jenis_pengajuan,
            'alasan' => $request->alasan,
            'status' => 'Menunggu', // Otomatis diset "Menunggu" untuk siswa
            'catatan' => null,
        ]);

        return redirect()
            ->route('siswa.pengajuan_barang.index')
            ->with('success', 'Pengajuan barang berhasil dikirim.');
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

        return view('siswa.pengajuan_barang.show', compact('pengajuan'));
    }
}