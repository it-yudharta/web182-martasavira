<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index()
    {
        $data_mahasiswa = \App\mahasiswa::all();
        return view ('mahasiswa.index',['data.mahasiswa' => $data_mahasiswa]); 
    }
}
