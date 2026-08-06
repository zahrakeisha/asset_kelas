<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Pengajuan_barang extends Model
{
    protected $table = 'pengajuan_barang';
    protected $primaryKey = 'pengajuan_id';
    protected $fillable = [
        'barang_id',
        'tanggal_pengajuan',
        'jenis_pengajuan',
        'alasan',
        'status',
        'catatan'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'barang_id');
    }
}
