<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $primaryKey = 'barang_id';
    protected $fillable = [
        'kategori_id',
        'kode_barang',
        'nama_barang',
        'merek',
        'model',
        'serial_number',
        'jumlah',
        'satuan',
        'harga_perolehan',
        'tanggal_perolehan',
        'masa_ekonomis',
        'kondisi',
        'lokasi',
        'keterangan',
    ];
    
}
