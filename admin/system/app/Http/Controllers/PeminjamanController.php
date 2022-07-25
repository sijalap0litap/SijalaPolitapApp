<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;
use App\Models\data_peminjaman;
use App\Models\data_laboratorium;

class PeminjamanController extends Controller
{

    public function indexpeminjaman()
    {

        $data['list_data_peminjaman'] = data_Peminjaman::all();
        $data['list_data_laboratorium'] = data_laboratorium::all();
        $data['user'] = auth()->user();

        return view('admin/peminjaman.indexpeminjaman', $data);
    }

    public function storepeminjaman()
    {
        $data_peminjaman = new peminjaman;
        $data_peminjaman->nama_kelompok = request('nama_kelompok');
        $data_peminjaman->id_lab = request('id_lab');
        $data_peminjaman->jurusan = request('jurusan');
        $data_peminjaman->tanggal_peminjaman = request('tanggal_peminjaman');
        $data_peminjaman->tanggal_selesai = request('tanggal_selesai');
        $data_peminjaman->keperluan_alat = request('keperluan_alat');
        $data_peminjaman->status = 1;
        $data_peminjaman->save();

        return redirect('peminjaman');
    }

    public function showpeminjaman($id){
        $data['peminjaman'] =  data_peminjaman::find($id);
        $data['user'] = auth()->user();

        return view('admin/peminjaman.showpeminjaman', $data);
    }

    public function setuju($id)
    {
        $data_peminjaman = data_peminjaman::find($id);
        $data_peminjaman->status = 2;
        $data_peminjaman->save();
        return redirect('peminjaman')->with('success', 'Data Disetujui');
    }

    public function tolak($id)
    {
        $data_peminjaman = data_peminjaman::find($id);
        $data_peminjaman->status = 3;
        $data_peminjaman->save();
        return redirect('peminjaman')->with('danger', 'Data Ditolak');
    }
}
