<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_mahasiswa;

class RegisterController extends Controller
{

    public function register()
    {
        return view('register');
    }


    public function store(Request $request)
    {
        $mahasiswa = New data_mahasiswa;
        $mahasiswa->NIM = request('NIM');
        $mahasiswa->nama = request('nama');
        $mahasiswa->username = request('username');
        $mahasiswa->confirmasi_password = request('confirmasi_password');
        $mahasiswa->no_hp = request('no_hp');
        $mahasiswa->email = request('email');
        $mahasiswa->semester = request('semester');
        $mahasiswa->jurusan = request('jurusan');
        $mahasiswa->status = 1;
        $mahasiswa->save();

        return redirect('login');
    }

}
