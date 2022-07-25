<?php

namespace App\Http\Controllers;
use App\Models\dataka_lab;
use App\Models\data_keluhan;

use Illuminate\Http\Request;


class KeluhanKetualabController extends Controller
{
    public function index()
    {
        $data['list_data_keluhan'] = data_keluhan::orderBy('id_keluhan', 'DESC')->get();
        $data ['kalab']= auth()->guard('dataka_lab')->user();
        return view('ketua_lab/keluhan.indexkeluhan', $data);
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

        return redirect('keluhan');
    }
}
