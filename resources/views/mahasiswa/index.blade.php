<h1>halo indonesia</h1>
<table>
  <tr>
      <th>nama_depan</th>
      <th>nama_belakang</th>
      <th>jenis_kelamin</th>
      <th>alamat</th>
</tr>
@foreach($data_mahasiswa as $mahasiswa)
<tr>
    <td>{{$mahasiswa->nama_depan}}</td>
    <td>{{$mahasiswa->nama_belakang}}</td>
    <td>{{$mahasiswa->jenis_kelamin}}</td>
    <td>{{$mahasiswa->alamat}}</td>
</tr>
@endforeach
</table>