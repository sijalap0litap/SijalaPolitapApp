<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'data_peminjaman';
    protected $primaryKey = 'id_lab';

    function data_laboratorium()
    {
        return $this->belongsTo('App\Models\data_laboratorium', 'id_lab');
    }


}
