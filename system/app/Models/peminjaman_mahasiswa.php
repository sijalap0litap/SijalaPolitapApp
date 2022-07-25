<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman_mahasiswa extends Model
{
    protected $table = 'data_peminjaman';
    protected $primaryKey = 'id_data_peminjaman';

    function data_laboratorium()
    {
        return $this->belongsTo('App\Models\data_laboratorium', 'id_lab');
    }
    function data_peminjaman()
    {
        return $this->belongsTo('App\Models\data_peminjaman', 'id_data_peminjaman');
    }
}
