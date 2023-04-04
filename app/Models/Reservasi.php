<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    public function pelanggans()
    {
        return $this->belongsTo(Pelanggan::class);
    }
    public function pakets()
    {
        return $this->hasMany(Paket::class);
    }
}
