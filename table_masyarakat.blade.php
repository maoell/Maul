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
    <a class="buat" href="{{ ('registrasi ') }} ">Buat</a>
  <div class="container">
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">nik</th>
      <th scope="col">nama</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">telp</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($masyarakat as $masyarakat)
    <tr>

      <td>{{$masyarakat->nik}}</td>
      <td>{{$masyarakat->nama}}</td>
      <td>{{$masyarakat->username}}</td>
      <td>{{$masyarakat->password}}</td>
      <td>{{$masyarakat->telp}}</td>
      
   
    </tr> @endforeach
  </tbody>
</table>
  </div>




  </div>

    
    
</nav>
</body>
</html>
@endsection('content')