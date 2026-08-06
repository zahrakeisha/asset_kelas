<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $primaryKey = 'barang_id';

    protected $fillable = [
        'kategori_id',
        'ruangan_id',
        'masa_ekonomis_id',
        'kode_barang',
        'nama_barang',
        'merek',
        'model',
        'serial_number',
        'jumlah',
        'kondisi',
        'tanggal_perolehan',
        'keterangan',
    ];


    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'kategori_id');
    }

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'ruangan_id', 'ruangan_id');
    }


    public function masaEkonomis()
    {
        return $this->belongsTo(MasaEkonomis::class, 'masa_ekonomis_id', 'masa_ekonomis_id');
    }


    public function pengajuanBarangs()
    {
        return $this->hasMany(PengajuanBarang::class, 'barang_id', 'barang_id');
    }
}