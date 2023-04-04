<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
class BeritaController extends Controller
{
    public function create(Request $request) 
    {
        $validationData = $request->validate([
            'judul' => 'required',
            'berita' => 'required',
            'tgl_post' => 'required|date',
            'id_kategori_berita' => 'required',
            'foto'=> 'nullable|image|mimes:jpeg,png,jpg,gift,svg|max:2048',
        ]);

        if ($request->hashFile('foto')) {
            $image = $request->file('foto');
            $validateDate['foto'] = $image->hasName();
        }

        berita::create($validationData);
    } 
}
