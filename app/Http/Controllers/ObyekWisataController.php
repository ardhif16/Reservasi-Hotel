<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class ObyekWisataController extends Controller
{
    public function create(Request $request) {
        $validationData = $request->validate([
            'nama_wisata' => 'required',
            'deskirpsi' => 'required',
            'id_kategori_berita' => 'required',
            'fasilitas' => 'required',
            'foto1'=> 'nullable|image|mimes:jpeg,png,jpg,gift,svg|max:2048',
            'foto2'=> 'nullable|image|mimes:jpeg,png,jpg,gift,svg|max:2048',
            'foto3'=> 'nullable|image|mimes:jpeg,png,jpg,gift,svg|max:2048',
            'foto3'=> 'nullable|image|mimes:jpeg,png,jpg,gift,svg|max:2048',
            'foto4'=> 'nullable|image|mimes:jpeg,png,jpg,gift,svg|max:2048',
            'foto5'=> 'nullable|image|mimes:jpeg,png,jpg,gift,svg|max:2048',
        ]);

        if ($request->hashFile('foto1')) {
            $image = $request->file('foto1');
            $validateDate['foto1'] = $image->hasName();
        }
        if ($request->hashFile('foto2')) {
            $image = $request->file('foto2');
            $validateDate['foto2'] = $image->hasName();
        }
        if ($request->hashFile('foto3 ')) {
            $image = $request->file('foto3');
            $validateDate['foto3'] = $image->hasName();
        }
        if ($request->hashFile('foto4')) {
            $image = $request->file('foto4');
            $validateDate['foto4'] = $image->hasName();
        }
        if ($request->hashFile('foto5')) {
            $image = $request->file('foto5');
            $validateDate['foto5'] = $image->hasName();
        }
        berita::create($validationData);
    } 
}
