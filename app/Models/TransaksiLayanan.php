<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiLayanan extends Model
{
    use HasFactory;

    protected $table = 'transaksi_layanan';
    protected $primaryKey = 'id_transaksi';
    public $timestamps = false;
    
    protected $fillable = [
        'id_user',
        'id_layanan',
        'id_kategori',
        'id_dealer',
        'id_produk',
        'metode_pembayaran',
        'jenis_service',
        'alamat_rumah',
        'status',
        'tanggal_transaksi',
        'tanggal_janji'
    ];

    protected $casts = [
        'tanggal_transaksi' => 'date',
        'tanggal_janji' => 'date'
    ];

    // Relasi: Transaksi belongs to User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    // Relasi: Transaksi belongs to Layanan
    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id_layanan');
    }

    // Relasi: Transaksi belongs to Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    // Relasi: Transaksi belongs to Dealer
    public function dealer()
    {
        return $this->belongsTo(Dealer::class, 'id_dealer', 'id_dealer');
    }

    // Relasi: Transaksi belongs to Produk
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id_produk');
    }

    // Konstanta status transaksi
    const STATUS_PENDING = 'pending';
    const STATUS_DIPROSES = 'diproses';
    const STATUS_SELESAI = 'selesai';
    const STATUS_DIBATALKAN = 'dibatalkan';

    // Helper methods
    public function isPending()
    {
        return $this->status === self::STATUS_PENDING;
    }

    public function isDiproses()
    {
        return $this->status === self::STATUS_DIPROSES;
    }

    public function isSelesai()
    {
        return $this->status === self::STATUS_SELESAI;
    }

    public function isDibatalkan()
    {
        return $this->status === self::STATUS_DIBATALKAN;
    }

    // Method untuk update status
    public function updateStatus($status)
    {
        $this->status = $status;
        $this->save();
        return $this;
    }

    // Scope untuk filter berdasarkan status
    public function scopePending($query)
    {
        return $query->where('status', self::STATUS_PENDING);
    }

    public function scopeDiproses($query)
    {
        return $query->where('status', self::STATUS_DIPROSES);
    }

    public function scopeSelesai($query)
    {
        return $query->where('status', self::STATUS_SELESAI);
    }

    // Format tanggal untuk display
    public function getTanggalTransaksiFormatAttribute()
    {
        return $this->tanggal_transaksi?->format('d F Y');
    }

    public function getTanggalJanjiFormatAttribute()
    {
        return $this->tanggal_janji?->format('d F Y');
    }
}