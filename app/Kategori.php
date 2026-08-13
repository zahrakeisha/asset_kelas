<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Masa_ekonomis;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $primaryKey = 'kategori_id';

    protected $fillable = [
        'nama_kategori',
    ];

    // Relasi ke Barang
    public function barangs()
    {
        return $this->hasMany(Barang::class, 'kategori_id', 'kategori_id');
    }

    // Relasi ke Masa Ekonomis
    public function masaEkonomis()
    {
        return $this->hasMany(Masa_ekonomis::class, 'kategori_id', 'kategori_id');
    }
}