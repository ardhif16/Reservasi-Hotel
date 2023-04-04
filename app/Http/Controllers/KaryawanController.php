<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function create(Request $request) {
        $title = 'Create';
        return view('karyawan.create', compact('title'));
    } 

    public function index()
    {
        $datas = User::whereNotIn('level', ['pelanggan'])->get();
        $title = 'Users';
        return view('karyawan.index', ["title" => 'Karyawan'], compact('datas', "title"));
    }

    public function edit(User $user)
    {
        $title = 'Update';
        $data = $user;
        $enumLevel = [['key' => 'admin', 'value' => 'Admin'], ['key' => 'pemilik', 'value' => 'Pemilik'], ['key' => 'bendahara', 'value' => 'Bendahara']];
        $enumJabatan = [['key' => 'administrasi', 'value' => 'Administrator'], ['key' => 'bendahara', 'value' => 'Bendahara'], ['key' => 'pemilik', 'value' => 'Pemilik']];
        return view('karyawan.update', compact('title', 'data', 'enumLevel', 'enumJabatan'));
    }

    public function update(Request $request, User $user)
    {
        $validationData = $request->validate([
            'nama_lengkap' => 'string',
            'level' => 'string|in:admin,bendahara,pemilik',
            'aktif' => 'nullable|integer',
            'no_hp' => 'nullable|unique:pelanggans|string|min:11|max:14',
            'alamat' => 'string|',
            'jabatan' => 'string|in:administrasi,bendahara,pemilik',
            'password' => 'nullable|min:6',
        ]);
        if ($request->email != $user->email) {
            $ruls['email'] = 'email:rfc,dns|unique:users';
        }

        $validationData['password'] = bcrypt($validationData['password']);

        $updateUser = $user->update($validationData);

        if ($updateUser) {
            $karyawan = $user->karyawan;
            $karyawan->nama_karyawan = $validationData['nama_lengkap'];
            $karyawan->no_hp = $validationData['no_hp'];
            $karyawan->alamat = $validationData['alamat'];
            $karyawan->jabatan = $validationData['jabatan'];

            $karyawan->save();

            return redirect(Route('user.index'))->with('success', 'User Updated Successfully.');
        } else {
            return redirect(Route('user.index'))->with('error', 'User Updated Failed.');
        }
    }



    public function delete(User $user)
    {
        $result = $user->destroy($user->id);
        if ($result) {
            Karyawan::destroy($user->karyawan->id);
            return redirect()->back()->with('success', 'User Delete Successfully.');
        } else {
            return redirect()->back()->with('error', 'User Delete Failed.');
        }
    }
}
