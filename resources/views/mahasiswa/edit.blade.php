@extends('layouts.master')

@section('content')
        <h1>Edit data mahasiswa</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
             {{session('sukses')}}
            </div>
            @endif
            <div class="row">
            <div class="col-lg-12">

            <form action="/mahasiswa/{{$mahasiswa->id}}/Update" method= "POST">
                {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">NAMA DEPAN</label>
    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NAMA DEPAN" value="{{$mahasiswa->nama_depan}}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">NAMA BELAKANG</label>
    <input name=nama_belakang type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NAMA BELAKANG" value="{{$mahasiswa->nama_belakang}}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$mahasiswa->alamat}}</textarea>
                            </div>

  <div class="form-group">
                                 <label for="exampleFormControlSelect1">Pilih Jenis kelamin</label>
                                 <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                 <option value="L" @if($mahasiswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                                 <option value="P" @if($mahasiswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                            </div>
                         </div>
                  @endsection