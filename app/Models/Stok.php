<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;

    protected $table = 'stok';
    protected $primaryKey = 'id_stok';
    public $timestamps = false;
    
    protected $fillable = [
        'id_produk',
        'id_dealer',
        'stok'
    ];

    protected $casts = [
        'stok' => 'integer'
    ];

    // Relasi: Stok belongs to Produk
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id_produk');
    }

    // Relasi: Stok belongs to Dealer
    public function dealer()
    {
        return $this->belongsTo(Dealer::class, 'id_dealer', 'id_dealer');
    }

    // Helper methods
    public function isAvailable()
    {
        return $this->stok > 0;
    }

    public function isLowStock($threshold = 5)
    {
        return $this->stok > 0 && $this->stok <= $threshold;
    }

    public function isOutOfStock()
    {
        return $this->stok <= 0;
    }

    // Method untuk mengurangi stok
    public function reduceStock($quantity = 1)
    {
        if ($this->stok >= $quantity) {
            $this->stok -= $quantity;
            $this->save();
            return true;
        }
        return false;
    }

    // Method untuk menambah stok
    public function addStock($quantity = 1)
    {
        $this->stok += $quantity;
        $this->save();
        return true;
    }

    // Scope untuk stok yang tersedia
    public function scopeAvailable($query)
    {
        return $query->where('stok', '>', 0);
    }

    // Scope untuk stok menipis
    public function scopeLowStock($query, $threshold = 5)
    {
        return $query->where('stok', '>', 0)->where('stok', '<=', $threshold);
    }
}