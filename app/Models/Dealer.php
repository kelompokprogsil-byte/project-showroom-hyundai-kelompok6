<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;

    protected $table = 'dealer';
    protected $primaryKey = 'id_dealer';
    public $timestamps = false;
    
    protected $fillable = [
        'nama_dealer',
        'email',
        'no_dealer',
        'provinsi',
        'kota',
        'alamat'
    ];

    // Relasi: Dealer memiliki banyak Stok
    public function stok()
    {
        return $this->hasMany(Stok::class, 'id_dealer', 'id_dealer');
    }

    // Relasi: Dealer memiliki banyak Transaksi
    public function transaksi()
    {
        return $this->hasMany(TransaksiLayanan::class, 'id_dealer', 'id_dealer');
    }

    // Helper method untuk alamat lengkap
    public function getAlamatLengkapAttribute()
    {
        return "{$this->alamat}, {$this->kota}, {$this->provinsi}";
    }
}