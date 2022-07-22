<?php

namespace App\Http\Controllers;
use App\Models\data_dosen;
use App\Models\data_peminjaman;
use App\Models\data_laboratorium;
use App\Models\jadwal;

use Illuminate\Http\Request;


class DosenPeminjamanController extends Controller
{
    public function index()
    {
        $data['list_data_peminjaman'] = data_peminjaman::orderBy('id_data_peminjaman', 'DESC')->get();
        $data ['dosen']= auth()->guard('data_dosen')->user();
        $data['list_data_laboratorium'] = data_laboratorium::all();
        $data ['dosen']= auth()->guard('data_dosen')->user();


        return view('dosen/peminjaman.index', $data);
    }

    public function storepeminjaman_dosen()
    {
        $data_peminjaman = new data_peminjaman;
        $data_peminjaman->nip_nim = request('nip_nim');
        $data_peminjaman->nama_kelompok = request('nama_kelompok');
        $data_peminjaman->id_lab = request('id_lab');
        $data_peminjaman->jurusan = request('jurusan');
        $data_peminjaman->tanggal_peminjaman = request('tanggal_peminjaman');
        $data_peminjaman->waktu_mulai = request('waktu_mulai');
        $data_peminjaman->waktu_selesai = request('waktu_selesai');
        $data_peminjaman->keperluan_alat = request('keperluan_alat');
        $data_peminjaman->status = 1;
        $data_peminjaman->jabatan = 2;
        $data_peminjaman->save();

        $jadwal = new jadwal;
        $jadwal->tanggal = request('tanggal_peminjaman');
        $jadwal->hari = request('hari');
        $jadwal->waktu_mulai = request('waktu_mulai');
        $jadwal->waktu_selesai = request('waktu_selesai');
        $jadwal->save();

        return redirect('dosen_peminjaman')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function editpeminjaman_dosen($id)
    {
        $data['list_data_laboratorium'] = data_laboratorium::all();
        $data['data_peminjaman'] = data_peminjaman::find($id);
        $data ['dosen']= auth()->guard('data_dosen')->user();

        return view('dosen/peminjaman.edit', $data);
    }

    public function showpeminjaman_dosen($id)
    {
        $data['data_peminjaman'] =  data_peminjaman::find($id);
        $data ['dosen']= auth()->guard('data_dosen')->user();

        return view('dosen/peminjaman.show', $data);
    }

    public function updatepeminjaman_dosen(Request $request,$id)
    {
        $data_peminjaman = Data_peminjaman::find($id);
        $data_peminjaman->nip_nim = request('nip_nim');
        $data_peminjaman->nama_kelompok = request('nama_kelompok');
        $data_peminjaman->id_lab = request('id_lab');
        $data_peminjaman->jurusan = request('jurusan');
        $data_peminjaman->tanggal_peminjaman = request('tanggal_peminjaman');
        $data_peminjaman->tanggal_selesai = request('tanggal_selesai');
        $data_peminjaman->keperluan_alat = request('keperluan_alat');
        $data_peminjaman->status = 1;
        $data_peminjaman->save();


        return redirect('dosen_peminjaman')->with('warning', 'Data Berhasil Diedit');
    }
}
