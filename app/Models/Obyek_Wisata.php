<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obyek_Wisata extends Model
{
    use HasFactory;
    public function kategori_wisatas()
    {
        return $this->belongsTo(Kategori_Wisata::class);
    }
}
    