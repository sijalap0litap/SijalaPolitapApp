<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;



class Dataka_lab extends Authenticatable
{
    protected $table = 'dataka_lab';
    protected $primaryKey = 'nip';

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    function data_laboratorium()
    {
        return $this->belongsTo('App\Models\data_laboratorium', 'id_lab');
    }

    function handleUploadFotoKalab()
   {
       if (request()->hasFile('foto')) {
           $foto = request()->file('foto');
           $destination = "images/kalab";
           $randomStr = Str::random(5);
           $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
           $url = $foto->storeAs($destination, $filename);
           $this->foto = "app/" . $url;
           $this->save();

       }
   }
}
