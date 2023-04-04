<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Models\User;

class PelangganController extends Controller
{
    public function create(Request $request) {
        $validationData = $request->validate([
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'foto'=> 'nullable|image|mimes:jpeg,png,jpg,gift,svg|max:2048',
            'id_user' => 'required',
        ]);
        if ($request->hashFile('foto')) {
            $image = $request->file('foto');
            $validateDate['foto'] = $image->hasName();
        }
        Pelanggan::create($validationData);
    } 

    public function index()
    {
        $datas = User::where(
            'level', 'pelanggan'
        )->get();
        $title = 'Users';
        return view('pelanggan.index', compact('datas', "title"));
    }
}
