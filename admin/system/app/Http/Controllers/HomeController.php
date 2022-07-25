<?php

namespace App\Http\Controllers;
use App\Models\data_peminjaman;
use App\Models\data_laboratorium;
use App\Models\data_mahasiswa;
use App\Models\data_dosen;
use App\Models\data_keluhan;
use App\Models\user;

class HomeController extends Controller{

    function showdashboard(){
        $data['peminjaman'] = data_peminjaman::orderBy('id_data_peminjaman', 'ASC')->count();
        $data['lab'] = data_laboratorium::orderBy('id_data_laboratorium', 'ASC')->count();
        $data['keluhan'] = data_keluhan::orderBy('id_data_keluhan', 'ASC')->count();
        $data['list_data_laboratorium'] = data_laboratorium::all();

        $data['user'] = auth()->user();

        return view('admin.index', $data);
    }

    function showdashboard_mahasiswa(){
        $data['peminjaman'] = data_peminjaman::orderBy('id_data_peminjaman', 'ASC')->count();
        $data['lab'] = data_laboratorium::orderBy('id_data_laboratorium', 'ASC')->count();
        $data['keluhan'] = data_keluhan::orderBy('id_data_keluhan', 'ASC')->count();
        $data['list_data_laboratorium'] = data_laboratorium::all();

        $data ['mahasiswa']= auth()->guard('data_mahasiswa')->user();

        return view('mahasiswa.index', $data);
    }

    function showdashboard_ketua_lab(){
        $data['peminjaman'] = data_peminjaman::orderBy('id_data_peminjaman', 'ASC')->count();
        $data['lab'] = data_laboratorium::orderBy('id_data_laboratorium', 'ASC')->count();
        $data['keluhan'] = data_keluhan::orderBy('id_data_keluhan', 'ASC')->count();
        $data['list_data_laboratorium'] = data_laboratorium::all();

        $data ['kalab']= auth()->guard('dataka_lab')->user();

        return view('ketua_lab.index', $data);
    }
    function showdashboard_dosen(){
        $data['peminjaman'] = data_peminjaman::orderBy('id_data_peminjaman', 'ASC')->count();
        $data['lab'] = data_laboratorium::orderBy('id_data_laboratorium', 'ASC')->count();
        $data['keluhan'] = data_keluhan::orderBy('id_data_keluhan', 'ASC')->count();
        $data['list_data_laboratorium'] = data_laboratorium::all();

        $data ['dosen']= auth()->guard('data_dosen')->user();

        return view('dosen.index', $data);
    }

    function showpeminjaman(){
        return view('admin.peminjaman.indexpeminjaman');
    }

    function showdata_peminjaman(){
        return view('admin.peminjaman.indexdata_peminjaman');
    }

    function showdatalaboratorium(){
        return view('admin.data_laboratorium.indexlaboratorium');
    }

    function showdata_ka_lab(){
        return view('admin.data_ka_lab.indexka_lab');
    }

    function laporan(){
        return view('admin.laporan.indexlaporan');
    }

    function showuser(){
        return view('admin.user.indexuser');
    }


}
