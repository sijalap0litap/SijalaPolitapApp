<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_mahasiswa;
use App\Models\data_dosen;
use App\Models\User;


class UserController extends Controller
{

    public function indexuser()
    {
        $data['list_data_dosen'] = data_dosen::all();
        $data['list_data_mahasiswa'] = data_mahasiswa::all();
        $data['user'] = auth()->user();

        return view('admin/user.indexuser', $data);
    }

    public function storeuser()
    {
        $user = new User;
        $user->nip = request('nip');
        $user->nama = request('nama');
        $user->jurusan = request('jurusan');
        $user->email = request('email');
        $user->no_hp = request('no_hp');
        $user->password = request('password');
        $user->save();

        return redirect('user');
    }

    public function showuser(User $user){
        $data['user'] =  $user;
        $data['user'] = auth()->user();

        return view('admin/user.showuser', $data);
    }


    public function verifikasi_mahasiswa($id)
    {
      $mahasiswa = data_mahasiswa::find($id);
      $mahasiswa->password = request('confirmasi_password');
      $mahasiswa->confirmasi_password = request('confirmasi_password');
      $mahasiswa->status = 2;
      $mahasiswa->save();

      return redirect('user')->with('success', 'Data Mahasiswa Berhasil Diverifikasi');

    }
    public function verifikasi_data_dosen($id)
    {
      $data_dosen = data_dosen::find($id);
      $data_dosen->password = request('confirmasi_password');
      $data_dosen->confirmasi_password = request('confirmasi_password');
      $data_dosen->status = 2;
      $data_dosen->save();

      return redirect('user')->with('success', 'Data Dosen Berhasil Diverifikasi');

    }



}
