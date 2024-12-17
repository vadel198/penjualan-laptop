<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $table = 'pembelis'; // Nama tabel di database
    protected $fillable = ['name', 'phone', 'alamat', 'brand', 'model', 'harga', 'laptop_id', 'foto'];

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class);
    }
}
