<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataka_lab;
use App\Models\peminjaman;
use App\Models\laporan;
use App\Models\data_laboratorium;

class Laporanketua_LabController extends Controller
{
    public function index()
    {
        $data['list_data_laboratorium'] = data_laboratorium::all();
        $data['list_data_peminjaman'] = peminjaman::all();
        $data['list_laporan'] = Laporan::all();
        $data ['kalab']= auth()->guard('dataka_lab')->user();
        return view('ketua_lab/laporan.index', $data);
    }
}
