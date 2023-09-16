@extends('layouts.app')

@section('content')
<style>
.buat
{ 
    font-size: 30px;
    text-decoration: none;
    color: black;
    font-family: fantasy;
    text-align: left;
}
body
{
    background-color: RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important;

}


</style>

<body>




@section('content')
<div class="text-bg-secondary p-3">
    <a class="buat" href="{{ ('isi_laporan') }} ">Buat</a>
  <div class="container">
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tanggal Kejadian</th>
      <th scope="col">Nik</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pengaduan as $pengaduan)
    <tr>
      <td>{{$pengaduan->id_pengaduan}}</td>
      <td>{{$pengaduan->tgl_pengaduan}}</td>
      <td>{{$pengaduan->nik}}</td>
      <td>{{$pengaduan->isi_laporan}}</td>
      <td>{{$pengaduan->foto}}</td>
      <td>{{$pengaduan->status}}</td>
      <td></td>
   
    </tr> @endforeach
  </tbody>
</table>
  </div>




  </div>

    
    
</nav>
</body>
</html>
@endsection('content')