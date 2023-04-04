<?php

namespace App\Http\Controllers;
use App\Models\Kategori_Berita;

use Illuminate\Http\Request;

class KategoriBeritaController extends Controller
{
    public function create(Request $request) {
        $validationData = $request->validate([
            'kategori_berita' => ['required'],
        ]);

        Kategori_Berita::create($validationData);
    } 
}
