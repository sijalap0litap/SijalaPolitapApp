<?php

namespace App\Http\Controllers;
use App\Models\prodi;

use Illuminate\Http\Request;


class ProdiController extends Controller
{
    public function index()
    {
        $data['list_prodi'] = prodi::all();
        $data['user'] = auth()->user();

        return view('admin/prodi.index', $data);
    }
    public function storeprodi()
    {
        $prodi = new prodi;
        $prodi->id_prodi = request('id_prodi');
        $prodi->nama_prodi = request('nama_prodi');

        $prodi->save();

        return redirect('prodi');
    }
}
