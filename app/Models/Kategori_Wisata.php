<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Wisata extends Model
{
    use HasFactory;
    public function obyek_wisatas()
    {
        return $this->hasMany(Obyek_Wisata::class);
    }
}
