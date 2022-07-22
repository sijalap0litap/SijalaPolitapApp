<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_laboratorium extends Model
{
    protected $table = 'data_laboratorium';
    protected $primaryKey = 'id_lab';

    function data_peminjaman()
    {
        return $this->belongsTo('App\Models\data_peminjaman', 'id_lab');
    }
}
