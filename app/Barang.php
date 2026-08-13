<?php

namespace App;

use App\Masa_ekonomis as AppMasa_ekonomis;
use Illuminate\Database\Eloquent\Model;
use App\Masa_ekonomis;
use App\Pengajuan_barang;



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

    // Relasi ke Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'kategori_id');
    }

    // Relasi ke Ruangan
    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'ruangan_id', 'ruangan_id');
    }

    // Relasi ke Masa Ekonomis
    public function masaEkonomis()
    {
        return $this->belongsTo(Masa_ekonomis::class, 'masa_ekonomis_id', 'masa_ekonomis_id');
    }

    // Relasi ke Pengajuan Barang
    public function pengajuanBarangs()
    {
        return $this->hasMany(Pengajuan_barang::class, 'barang_id', 'barang_id');
    }
}