<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $primaryKey = 'kategori_id';
    protected $fillable = ['nama_kategori'];

    public function barangs()
    {
        return $this->hasMany(Barang::class, 'kategori_id', 'kategori_id');
    }
}
