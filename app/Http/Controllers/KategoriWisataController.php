<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori_Wisata;

class KategoriWisataController extends Controller
{
    public function create(Request $request) {
        $validationData = $request->validate([
            'kategori_wisata' => ['required'],
        ]);

        Kategori_Wisata::create($validationData);
    }
}
