<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $timestamps = false;
    
    protected $fillable = [
        'foto_profil',
        'username',
        'nama',
        'password',
        'email',
        'tanggal_daftar'
    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [
        'tanggal_daftar' => 'date'
    ];

    // Relasi: User memiliki banyak Transaksi
    public function transaksi()
    {
        return $this->hasMany(TransaksiLayanan::class, 'id_user', 'id_user');
    }

    // Helper method untuk foto profil
    public function getFotoProfilUrlAttribute()
    {
        if ($this->foto_profil) {
            return asset('images/users/' . $this->foto_profil);
        }
        return asset('images/default-avatar.png');
    }

    // Method untuk get transaksi terbaru
    public function latestTransaksi($limit = 5)
    {
        return $this->transaksi()
                    ->with(['layanan', 'produk', 'dealer'])
                    ->orderBy('tanggal_transaksi', 'desc')
                    ->limit($limit)
                    ->get();
    }

    // Method untuk count total transaksi
    public function totalTransaksi()
    {
        return $this->transaksi()->count();
    }

    // Method untuk transaksi pending
    public function transaksiPending()
    {
        return $this->transaksi()->where('status', 'pending')->count();
    }
}