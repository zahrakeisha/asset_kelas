<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masa_ekonomis extends Model
{
    protected $table = ' masa_ekonomis';
    protected $primaryKey = 'masa_ekonomis_id';

    protected $fillable = [
        'kategori_id',
        'lama_ekonomis',
        'satuan',
        'keterangan'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'kategori_id');
    }


    public function barang()
    {
        return $this->hasMany(Barang::class, 'masa_ekonomis_id', 'masa_ekonomis_id');
    }
}
