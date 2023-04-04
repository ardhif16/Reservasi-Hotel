<?php

namespace App\Http\Controllers;
use app\Models\User;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Untuk menampilkan data User.
     */
    public function index()
    {
        $datas = User::all();
        $title = 'Users';
        return view('dashboard.users.index', compact('datas', "title"));
    }

    /**
     * untuk mengarahkan ke tampilan create user.
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * untuk simpan data dari from create user diatas
     */
    public function store(Request $request)
    {
        //untuk karyawan
        $validationData = $request->validate([
            'nama' => 'required|string',
            'level' => 'required|string|in:admin,bendahara,pemilik',
            'email' => 'email:rfc,dns|unique:users',
            'no_hp' => 'nullable|unique:pelanggans|string|min:11|max:14',
            'alamat' => 'required|string|',
            'jabatan' => 'required|string|in:administrasi,bendahara,pemilik',
            'password' => 'required|min:6',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
        ]);
        
        //untuk simpan data ke database 
        $user=User::create([
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            'level'=> $request->level,
        ]);
        
        if($user){
            Karyawan::create([
                'nama_karyawan'=> $request->nama,
                'no_hp'=> $request->no_hp,
                'jabatan'=> $request->jabatan,
                'alamat'=> $request->alamat,
                'user_id'=>$user->id,
            ]);
            return redirect('/karyawan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
}