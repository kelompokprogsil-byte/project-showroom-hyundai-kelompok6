<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    public $timestamps = false;
    
    protected $fillable = [
        'kategori'
    ];

    // Relasi: Kategori memiliki banyak Produk
    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_kategori', 'id_kategori');
    }

    // Relasi: Kategori memiliki banyak Transaksi
    public function transaksi()
    {
        return $this->hasMany(TransaksiLayanan::class, 'id_kategori', 'id_kategori');
    }

    // Konstanta untuk ID kategori
    const MOBIL = 1;
    const SPAREPART = 2;
    const AKSESORIS = 3;

    // Helper method
    public function isMobil()
    {
        return $this->id_kategori === self::MOBIL;
    }

    public function isSparepart()
    {
        return $this->id_kategori === self::SPAREPART;
    }

    public function isAksesoris()
    {
        return $this->id_kategori === self::AKSESORIS;
    }
}