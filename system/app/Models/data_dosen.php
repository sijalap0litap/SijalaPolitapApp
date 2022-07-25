<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;


class data_dosen extends Authenticatable
{
    protected $table = 'data_dosen';
    protected $primaryKey = 'NIP';

   public function setPasswordAttribute($value)
   {
       $this->attributes['password'] = bcrypt($value);
   }

   function handleUploadFotoDosen()
   {
       if (request()->hasFile('foto')) {
           $foto = request()->file('foto');
           $destination = "images/dosen";
           $randomStr = Str::random(5);
           $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
           $url = $foto->storeAs($destination, $filename);
           $this->foto = "app/" . $url;
           $this->save();

       }
   }

   function data_peminjaman()
   {
       return $this->belongsTo('App\Models\data_peminjaman', 'nip_nim');
   }
}
