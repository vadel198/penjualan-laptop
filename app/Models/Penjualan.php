<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualans'; // Nama tabel di database
    protected $fillable = ['brand', 'model', 'processor', 'ram', 'storage', 'harga', 'foto']; // Kolom yang boleh diisi
    
    public function pembeli()
    {
        return $this->hasMany(Pembeli::class);
    }
}

