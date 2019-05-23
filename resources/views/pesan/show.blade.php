@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">WarungIndo
                <a class="btn btn-primary btn-sm float-right" href="/warung/tambah">Tambah Pesanan</a>
                </div>

                <div class="card-body">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">ALamat</th>
      <th scope="col">pesanan</th>
      <th scope="col">no. telphone</th>
    </tr>
  </thead>
  <tbody>
     @foreach($pembelis as $item)
    <tr>
      <td>{{$item -> id}}</td>
      <td>{{$item -> nama}}</td>
      <td>{{$item -> alamat}}</td>
      <td>{{$item -> pesanan}}</td>
      <td>{{$item -> no_Tlp}}</td>
      <td>
      <a class="btn btn-dark btn-sm " href="/warung/{{$item->id}}/edit">Edit</a>    
      <a class="btn btn-primary btn-sm " href="/warung/{{$item->id}}/hapus">Hapus</a>    
      </td>    
    </tr>
    @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
