<?php

namespace App\Http\Controllers;
use App\Models\dataka_lab;

use Illuminate\Http\Request;


class Ketua_LabController extends Controller
{
    public function index()
    {
        return view('ketua_lab.index');
    }
}
