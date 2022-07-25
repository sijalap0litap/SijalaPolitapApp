<?php

namespace App\Http\Controllers;
use App\Models\data_mahasiswa;
use App\Models\data_dosen;
use App\Models\dataka_lab;
use App\Models\User;

use Illuminate\Http\Request;


class ProfileController extends Controller
{

// admin
    public function index()
    {
        $data['user'] = auth()->user();

        return view('admin/profile.index', $data);
    }

    public function updateprofile($id)
    {
        $user = user::find($id);
        $user->username = request('username');
        $user->nama = request('nama');
        $user->password = request('confirmasi_password');
        $user->confirmasi_password = request('confirmasi_password');
        $user->handleUploadFotoAdmin();

        $user->save();

        return redirect('profile');

    }

// mahasiswa

    public function index_profile()
    {
        $data ['mahasiswa']= auth()->guard('data_mahasiswa')->user();
        return view('mahasiswa/profile.index_profile', $data);
    }

    public function updateprofile_mahasiswa($id)
    {
        $data_mahasiswa = data_mahasiswa::find($id);
        $data_mahasiswa->username = request('username');
        $data_mahasiswa->email = request('email');
        $data_mahasiswa->password = request('confirmasi_password');
        $data_mahasiswa->confirmasi_password = request('confirmasi_password');
        $data_mahasiswa->nama = request('nama');
        $data_mahasiswa->NIM = request('NIM');
        $data_mahasiswa->semester = request('semester');
        $data_mahasiswa->no_hp = request('no_hp');
        $data_mahasiswa->handleUploadFotoMahasiswa();
        $data_mahasiswa->save();

        return redirect('profile_mahasiswa');

    }

// dosen
    public function index_profile_dosen()
    {
        $data ['dosen']= auth()->guard('data_dosen')->user();
        return view('dosen/profile.index_profile_dosen', $data);
    }

    public function updateprofile_dosen($id)
    {
        $data_dosen = data_dosen::find($id);
        $data_dosen->username = request('username');
        $data_dosen->nama = request('nama');
        $data_dosen->email = request('email');
        $data_dosen->NIP = request('NIP');
        $data_dosen->password = request('confirmasi_password');
        $data_dosen->confirmasi_password = request('confirmasi_password');
        $data_dosen->no_hp = request('no_hp');
        $data_dosen->handleUploadFotoDosen();
        $data_dosen->save();

        return redirect('profile_dosen');

    }

// kalab
    public function index_profile_kalab()
    {
        $data ['kalab']= auth()->guard('dataka_lab')->user();
        return view('ketua_lab/profile.index_profile_kalab', $data);
    }

    public function updateprofile_kalab($id)
    {
        $dataka_lab = dataka_lab::find($id);
        $dataka_lab->nip = request('nip');
        $dataka_lab->username = request('username');
        $dataka_lab->password = request('confirmasi_password');
        $dataka_lab->confirmasi_password = request('confirmasi_password');
        $dataka_lab->jabatan = request('jabatan');
        $dataka_lab->email = request('email');
        $dataka_lab->no_hp = request('no_hp');
        $dataka_lab->handleUploadFotoKalab();
        $dataka_lab->save();

        return redirect('profile_kalab');

    }
}
