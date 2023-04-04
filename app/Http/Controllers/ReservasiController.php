<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function create(Request $request) {
        $validationData = $request->validate([
            'id_pelanggan' => 'required',
            'id_paket' => 'required',
            'tgl_reservasi_wisata' => 'required|date',
            'harga' => 'required',
            'jumlah_peserta' => 'required',
            'diskon' => 'required',
            'nilai_diskon' => 'required',
            'total_bayar' => 'required',
            'file_bukti_tf' => 'required',
            'status_reservasi_wisata' => 'required',
        ]);
        Reservasi::create($validationData);
    } 

    public function index()
    {
        return view('reservasi.index', ["title" => 'Reservasi']);
    }
}
