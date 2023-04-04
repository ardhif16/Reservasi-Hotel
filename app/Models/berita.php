<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $with = ['kategori_beritas'];
    use HasFactory;
    public function kategori_beritas()
    {
        return $this->belongsTo(Kategori_Berita::class,'kategori__berita_id','id');
    }
}
