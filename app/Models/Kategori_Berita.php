<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Berita extends Model
{
    use HasFactory;
    public function beritas()
    {
        return $this->hasMany(berita::class);
    }
}
