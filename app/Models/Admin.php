<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    public $timestamps = false;
    
    protected $fillable = [
        'username_admin',
        'nama',
        'password',
        'email',
        'status',
        'jabatan'
    ];

    protected $hidden = [
        'password'
    ];

    // Relasi: Admin memiliki banyak Produk
    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_admin', 'id_admin');
    }

    // Helper method untuk check status aktif
    public function isActive()
    {
        return $this->status === 'aktif';
    }
}