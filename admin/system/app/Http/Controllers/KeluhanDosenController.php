<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_keluhan;
use App\Models\data_dosen;

class KeluhanDosenController extends Controller
{

    public function index()
    {
        $data['list_data_keluhan'] = data_keluhan::orderBy('id_keluhan', 'DESC')->get();
        $data ['dosen']= auth()->guard('data_dosen')->user();

        return view('dosen/keluhan.indexdosen', $data);
    }

    public function storekeluhan_dosen()
    {
        $data_keluhan = new data_keluhan;
        $data_keluhan->nama_pengaju = request('nama_pengaju');
        $data_keluhan->jurusan = request('jurusan');
        $data_keluhan->deskripsi = request('deskripsi');
        $data_keluhan->handleUploadFotoDataKeluhan();
        $data_keluhan->save();

        return redirect('dosen_keluhan');
    }

    public function editkeluhan_dosen($id)
    {

        $data['data_keluhan'] = data_keluhan::find($id);
        $data ['dosen']= auth()->guard('data_dosen')->user();

         return view('dosen/keluhan.edit', $data);
    }

    public function updatekeluhan_dosen($id)
    {
        $data_keluhan = data_keluhan::find($id);
        $data_keluhan->nama_pengaju = request('nama_pengaju');
        $data_keluhan->jurusan = request('jurusan');
        $data_keluhan->deskripsi = request('deskripsi');
        $data_keluhan->handleUploadFotoDataKeluhan();
        $data_keluhan->save();
        return redirect('dosen_keluhan')->with('warning', 'Data Berhasil Diedit');

    }
}
