@extends('layouts.master')

@section('content')
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
    {{session('sukses')}}
    </div>
    @endif
  <div class="row">
    <div class="col-6">
      <h1>Data Mahasiswa</h1>
    </div>
    <div class="col-6">
            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
          Tambah data siswa
        </button>
        
    </div>
  
    <table class="table table-hover">
      <tr>
          <th>NAMA DEPAN</th>
          <th>NAMA BELAKANG</th>
          <th>JENIS KELAMIN</th>
          <th>ALAMAT</th>
          <th>AKSI</th>
  </tr>
@foreach($data_mahasiswa as $mahasiswa)
<tr>
    <td>{{$mahasiswa->nama_depan}}</td>
    <td>{{$mahasiswa->nama_belakang}}</td>
    <td>{{$mahasiswa->jenis_kelamin}}</td>
    <td>{{$mahasiswa->alamat}}</td>
    <td>
    <a href="/mahasiswa/{{$mahasiswa->id}}/Edit"class="btn btn-warning btn-sn">Edit</a>
    <a href="/mahasiswa/{{$mahasiswa->id}}/Delete"class="btn btn-danger btn-sn" onclick="return confirm('yakin mau dihapus ?')">Delete</a>
   </td>
</tr>
@endforeach
</table>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form action="/mahasiswa/create" method= "POST">
                {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">NAMA DEPAN</label>
    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NAMA DEPAN">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">NAMA BELAKANG</label>
    <input name=nama_belakang type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NAMA BELAKANG">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

  <div class="form-group">
                                 <label for="exampleFormControlSelect1">Pilih Jenis kelamin</label>
                                 <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                 <option value="L">Laki-Laki</option>
                                 <option value="P">Perempuan</option>
                                </select>
                            </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
@endsection
         





