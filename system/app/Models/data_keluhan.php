<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class data_keluhan extends Model {

    public $table = 'data_keluhan';
    protected $primaryKey = 'id_keluhan';

    function handleUploadFotoDataKeluhan()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/keluhan";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

}
