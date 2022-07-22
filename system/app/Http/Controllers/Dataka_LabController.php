<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataka_lab;
use App\Models\data_laboratorium;

class Dataka_LabController extends Controller
{

    public function indexdataka_lab()
    {
        $data['list_data_laboratorium'] = data_laboratorium::all();
        $data['list_dataka_lab'] = Dataka_lab::all();
        $data['user'] = auth()->user();

        return view('admin/dataka_lab.indexdataka_lab', $data);
    }

    public function storedataka_lab()
    {
        $dataka_lab = New Dataka_lab;
        $dataka_lab->nip = request('nip');
        $dataka_lab->nama_pengurus = request('nama_pengurus');
        $dataka_lab->username = request('username');
        $dataka_lab->password = request('password');
        $dataka_lab->confirmasi_password = request('confirmasi_password');
        $dataka_lab->jabatan = request('jabatan');
        $dataka_lab->email = request('email');
        $dataka_lab->no_hp = request('no_hp');
        $dataka_lab->save();

        return redirect('dataka_lab');
    }

    public function showdataka_lab($id)
    {
        $data['dataka_lab'] =  dataka_lab::find($id);
        $data['user'] = auth()->user();

        return view('admin.dataka_lab.showdataka_lab', $data);
    }


    public function editdataka_lab($id)
    {
        $data['dataka_lab'] = Dataka_lab::find($id);
        $data['user'] = auth()->user();

        return view('admin/dataka_lab.editdataka_lab', $data);
    }

    public function updatedataka_lab(Request $request,$id)
    {
        $dataka_lab = Dataka_lab::find($id);
        $dataka_lab->nip = request('nip');
        $dataka_lab->nama_pengurus = request('nama_pengurus');
        $dataka_lab->username = request('username');
        $dataka_lab->password = request('confirmasi_password');
        $dataka_lab->confirmasi_password = request('confirmasi_password');
        $dataka_lab->jabatan = request('jabatan');
        $dataka_lab->email = request('email');
        $dataka_lab->no_hp = request('no_hp');
        $dataka_lab->save();

        return redirect('dataka_lab')->with('warning', 'Data Berhasil Diedit');
    }
}




