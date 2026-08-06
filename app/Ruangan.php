<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';
    protected $primaryKey = 'ruangan_id';

    protected $fillable = [
        'nama_ruangan',
        'keterangan',
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class, 'ruangan_id', 'ruangan_id');
    }
}
