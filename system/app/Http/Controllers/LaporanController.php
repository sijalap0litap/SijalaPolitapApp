<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan;
use App\Models\peminjaman;
use App\Models\data_laboratorium;

class LaporanController extends Controller
{
    public function indexlaporan()
    {
        $data['list_data_laboratorium'] = data_laboratorium::all();
        $data['list_data_peminjaman'] = peminjaman::all();
        $data['list_laporan'] = Laporan::all();
        $data['user'] = auth()->user();

        return view('admin/laporan.indexlaporan', $data);
    }

    public function storelaporan()
    {
        $laporan = new Laporan;
        $laporan->nama_kelompok = request('nama_kelompok');
        $laporan->nama_laboratorium = request('nama_laboratorium');
        $laporan->jurusan = request('jurusan');
        $laporan->semester = request('semester');
        $laporan->tanggal_peminjaman = request('tanggal_peminjaman');
        $laporan->tanggal_selesai = request('tanggal_selesai');
        $laporan->keperluan_alat = request('keperluan_alat');
        $laporan->status = 1;
        $laporan->save();

        return redirect('laporan');
    }

    public function showlaporan(Laporan $laporan){
        $data['laporan'] =  $laporan;
        $data['user'] = auth()->user();

        return view('admin/laporan.showlaporan', $data);
    }
}
