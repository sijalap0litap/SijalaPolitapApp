<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_laboratorium;
use App\Models\data_peminjaman;

class Data_PeminjamanController extends Controller
{

    public function indexdata_peminjaman()
    {
        $data['list_peminjaman'] = data_peminjaman::all();
        $data['user'] = auth()->user();

        return view('admin/data_peminjaman.indexdata_peminjaman', $data);
    }

    public function storedata_peminjaman()
    {
        $data_peminjaman = new data_peminjaman;
        $data_peminjaman->nama_kelompok = request('nama_kelompok');
        $data_peminjaman->id_lab = request('id_lab');
        $data_peminjaman->jurusan = request('jurusan');
        $data_peminjaman->kapasitas_lab = request('kapasitas_lab');
        $data_peminjaman->tanggal_peminjaman = request('tanggal_peminjaman');
        $data_peminjaman->tanggal_selesai = request('tanggal_selesai');
        $data_peminjaman->keperluan_alat = request('keperluan_alat');
        $data_peminjaman->status = 1;
        $data_peminjaman->save();

        return redirect('data_peminjaman');
    }

    public function showdata_peminjaman($id)
    {
        $data['data_peminjaman'] =  data_peminjaman::find($id);
        $data['user'] = auth()->user();

        return view('admin.data_peminjaman.showdata_peminjaman', $data);
    }

    public function editdata_peminjaman($id)
    {
        $data['data_peminjaman'] = Data_peminjaman::find($id);
        $data['user'] = auth()->user();

         return view('admin/data_peminjaman.editdata_peminjaman', $data);
     }
}
