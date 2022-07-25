<?php

namespace App\Http\Controllers;
use App\Models\jadwal;
use App\Models\Event;

use Illuminate\Http\Request;


class JadwalController extends Controller
{
    public function index()
    {
        $data['list_jadwal'] = Event::all();
        $data['user'] = auth()->user();

        return view('admin/jadwal.index', $data);
    }

    public function create()
    {
        $data['user'] = auth()->user();

        return view('admin/jadwal.create',$data);
    }

    public function store()
    {
        $jadwal = new jadwal;
        $jadwal->tanggal = request('tanggal');
        $jadwal->hari = request('hari');
        $jadwal->waktu_mulai = request('waktu_mulai');
        $jadwal->waktu_selesai = request('waktu_selesai');
        $jadwal->save();

        return redirect('jadwal');
    }



    public function storejadwal()
    {
        $jadwal = new jadwal;
        $jadwal->dosen_pengampu = request('dosen_pengampu');
        $jadwal->nama_makul = request('nama_makul');
        $jadwal->jumlah_mahasiswa = request('jumlah_mahasiswa');
        $jadwal->hari = request('hari');
        $jadwal->save();

        return redirect('jadwal');
    }

    public function editjadwal($id)
    {
        $data['jadwal'] = jadwal::find($id);
        $data['user'] = auth()->user();

         return view('admin/jadwal.edit', $data);
    }

    public function updatejadwal($id)
    {
        $jadwal = jadwal::find($id);
        $jadwal->dosen_pengampu = request('dosen_pengampu');
        $jadwal->nama_makul = request('nama_makul');
        $jadwal->jumlah_mahasiswa = request('jumlah_mahasiswa');
        $jadwal->hari = request('hari');
        $jadwal->save();

        return redirect('jadwal');

    }
    public function showjadwal($id)
    {
        $data['jadwal'] =  jadwal::find($id);
        $data['user'] = auth()->user();

        return view('admin/jadwal.show', $data);
    }

}
