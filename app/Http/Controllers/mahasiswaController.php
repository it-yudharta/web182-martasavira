<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index()
    {
        $data_mahasiswa = \App\mahasiswa::all();
        return view ('mahasiswa.index',['data_mahasiswa' => $data_mahasiswa]);
    }

    public function create(Request $request)
    {
        \App\mahasiswa::create ($request->all());
        return redirect('/mahasiswa')->with('sukses','Data berhasil diinput');
    }

   public function Edit($id)
   {
      $mahasiswa = \App\mahasiswa::find($id);
      return view('mahasiswa/Edit',['mahasiswa' => $mahasiswa]);
   }

    public function Update(Request $request,$id)
    {
        $mahasiswa = \App\mahasiswa::find($id);
        $mahasiswa->Update($request->All());
        return redirect('/mahasiswa')->with('sukses','Data berhasil diUpdate');
    }

    public function Delete($id)
    {
        $mahasiswa = \App\mahasiswa::find($id);
        $mahasiswa->Delete($mahasiswa);
        return redirect('/mahasiswa')->with('sukses','Data berhasil dihapus');
    }
   
}

