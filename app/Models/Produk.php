<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    public $timestamps = false;
    
    protected $fillable = [
        'id_kategori',
        'id_admin',
        'gambar',
        'nama_produk',
        'jenis',
        'model',
        'warna',
        'kategori',
        'tipe',
        'tahun_produksi',
        'transmisi',
        'kapasitas_mesin',
        'tenaga',
        'kursi',
        'fitur',
        'deskripsi',
        'harga',
        'tanggal_input'
    ];

    protected $casts = [
        'harga' => 'decimal:2',
        'tanggal_input' => 'date'
    ];

    // Relasi: Produk belongs to Kategori
    // Nama method diubah jadi kategoriDetail untuk menghindari konflik dengan kolom 'kategori'
    public function kategoriDetail()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    // Relasi: Produk belongs to Admin (yang menginput)
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }

    // Relasi: Produk memiliki banyak Stok di berbagai dealer
    public function stok()
    {
        return $this->hasMany(Stok::class, 'id_produk', 'id_produk');
    }

    // Relasi: Produk memiliki banyak Transaksi
    public function transaksi()
    {
        return $this->hasMany(TransaksiLayanan::class, 'id_produk', 'id_produk');
    }

    // Helper methods
    public function getHargaFormatAttribute()
    {
        return 'Rp ' . number_format($this->harga, 0, ',', '.');
    }

    public function getGambarUrlAttribute()
    {
        if ($this->gambar) {
            return asset('images/produk/' . $this->gambar);
        }
        return asset('images/no-image.png');
    }

    // Scope untuk filter kategori
    public function scopeMobil($query)
    {
        return $query->where('id_kategori', Kategori::MOBIL);
    }

    public function scopeSparepart($query)
    {
        return $query->where('id_kategori', Kategori::SPAREPART);
    }

    public function scopeAksesoris($query)
    {
        return $query->where('id_kategori', Kategori::AKSESORIS);
    }

    // Scope untuk produk dengan stok tersedia
    public function scopeAvailable($query)
    {
        return $query->whereHas('stok', function($q) {
            $q->where('stok', '>', 0);
        });
    }

    // Method untuk cek ketersediaan stok
    public function hasStock()
    {
        return $this->stok()->where('stok', '>', 0)->exists();
    }

    // Method untuk total stok semua dealer
    public function getTotalStokAttribute()
    {
        return $this->stok()->sum('stok');
    }
}