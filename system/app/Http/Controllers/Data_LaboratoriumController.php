<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_laboratorium;
use App\Models\data_peminjaman;

class Data_LaboratoriumController extends Controller
{

    public function indexdata_laboratorium()
    {
        $data['list_data_laboratorium'] = Data_laboratorium::all();
        $data['user'] = auth()->user();

        return view('admin/data_laboratorium.indexdata_laboratorium', $data);
    }

    public function storedata_laboratorium()
    {
        $data_laboratorium = new data_laboratorium;
        $data_laboratorium->nama_lab = request('nama_lab');
        $data_laboratorium->kapasitas_lab = request('kapasitas_lab');
        $data_laboratorium->nama_gedung = request('nama_gedung');
        $data_laboratorium->lantai = request('lantai');
        $data_laboratorium->jurusan = request('jurusan');
        $data_laboratorium->nama_teknisi = request('nama_teknisi');
        $data_laboratorium->save();

        return redirect('data_laboratorium');
    }

    public function showlaboratorium($id)
    {
        $data['user'] = auth()->user();
        $data['data_laboratorium'] =  data_laboratorium::find($id);
        return view('admin.data_laboratorium.showlaboratorium', $data);
    }
}
