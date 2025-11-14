<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanan';
    protected $primaryKey = 'id_layanan';
    public $timestamps = false;
    
    protected $fillable = [
        'nama_layanan',
        'deskripsi',
        'kebutuhan_alamat',
        'kebutuhan_tanggal'
    ];

    protected $casts = [
        'kebutuhan_alamat' => 'boolean',
        'kebutuhan_tanggal' => 'boolean'
    ];

    // Relasi: Layanan memiliki banyak Transaksi
    public function transaksi()
    {
        return $this->hasMany(TransaksiLayanan::class, 'id_layanan', 'id_layanan');
    }

    // Konstanta untuk ID layanan
    const BOOKING = 1;
    const TRADE_IN = 2;
    const TEST_DRIVE = 3;
    const CHECKOUT = 4;

    // Helper methods
    public function needsAddress()
    {
        return (bool) $this->kebutuhan_alamat;
    }

    public function needsDate()
    {
        return (bool) $this->kebutuhan_tanggal;
    }
}