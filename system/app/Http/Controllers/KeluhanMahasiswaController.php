<?php

namespace App\Http\Controllers;

use App\Models\data_keluhan;

use Illuminate\Http\Request;


class KeluhanMahasiswaController extends Controller
{
    // admin
    public function index()
    {
        $data['list_data_keluhan'] = data_keluhan::orderBy('id_keluhan', 'DESC')->get();
        $data['user'] = auth()->user();
        // $data ['mahasiswa']= auth()->guard('data_mahasiswa')->user();


        return view('admin/keluhan.indexkeluhan', $data);
    }

    public function storekeluhanadmin()
    {
        $data_keluhan = new data_keluhan;
        $data_keluhan->nip_nim = request('nip_nim');
        $data_keluhan->nama_pengaju = request('nama_pengaju');
        $data_keluhan->jurusan = request('jurusan');
        $data_keluhan->deskripsi = request('deskripsi');
        $data_keluhan->handleUploadFotoDataKeluhan();
        $data_keluhan->save();

        return redirect('keluhan');
    }

    // mahasiswa
    public function indexkeluhan()
    {
        $data['list_data_keluhan'] = data_keluhan::orderBy('id_keluhan', 'DESC')->get();
        $data['mahasiswa'] = auth()->guard('data_mahasiswa')->user();

        return view('mahasiswa.keluhan.index', $data);
    }

    public function storekeluhan()
    {
        $data_keluhan = new data_keluhan;
        $data_keluhan->nip_nim = request('nip_nim');
        $data_keluhan->nama_pengaju = request('nama_pengaju');
        $data_keluhan->jurusan = request('jurusan');
        $data_keluhan->deskripsi = request('deskripsi');
        $data_keluhan->handleUploadFotoDataKeluhan();
        $data_keluhan->save();

        return redirect('keluhan_mahasiswa');
    }
    public function editkeluhan($id)
    {
        $data['data_keluhan'] = data_keluhan::find($id);
        $data['mahasiswa'] = auth()->guard('data_mahasiswa')->user();


        return view('mahasiswa/keluhan.editkeluhan', $data);
    }

    public function update_keluhan(Request $request, $id)
    {
        $data_keluhan = data_keluhan::find($id);
        $data_keluhan->nip_nim = request('nip_nim');
        $data_keluhan->nama_pengaju = request('nama_pengaju');
        $data_keluhan->jurusan = request('jurusan');
        $data_keluhan->deskripsi = request('deskripsi');
        $data_keluhan->handleUploadFotoDataKeluhan();
        $data_keluhan->save();

        return redirect('keluhan_mahasiswa')->with('warning', 'Data Berhasil Diedit');
    }
}
