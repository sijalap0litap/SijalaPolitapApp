<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_peminjaman extends Model
{
    protected $table = 'data_peminjaman';
    protected $primaryKey = 'id_data_peminjaman';

    function data_laboratorium()
    {
        return $this->belongsTo('App\Models\data_laboratorium', 'id_lab');
    }

    function data_mahasiswa()
    {
        return $this->belongsTo('App\Models\data_mahasiswa', 'nip_nim');
    }
    function data_dosen()
    {
        return $this->belongsTo('App\Models\data_dosen', 'nip_nim');
    }

}
