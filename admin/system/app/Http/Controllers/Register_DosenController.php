<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_dosen;

class Register_DosenController extends Controller
{

    public function register_dosen()
    {
        return view('register_dosen');
    }

    public function store_register_dosen(Request $request)
    {
        $data_dosen = New data_dosen;
        $data_dosen->NIP = request('NIP');
        $data_dosen->nama = request('nama');
        $data_dosen->username = request('username');
        $data_dosen->email = request('email');
        $data_dosen->no_hp = request('no_hp');
        $data_dosen->confirmasi_password = request('confirmasi_password');
        $data_dosen->jurusan = request('jurusan');
        $data_dosen->status = 1;
        $data_dosen->save();

        return redirect('login');
    }

}
