@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah data</div>

                <div class="card-body">
                <form action = "/warung/store"method="GET">
       <div class="form-group">
    <label for="nama">Nama</label>
    <input name="nama" type="text"class="form-control" id="nama" placeholder="Masukan Nama">
  
  
    <div class="form-group">
    <label for="nama">Alamat</label>
    <input name="alamat" type="text"class="form-control" id="alamat"  placeholder="Masukan alamat">

    
    <div class="form-group">
    <label for="nama">Pesanan</label>
    <input name="pesanan" type="text"class="form-control" id="pesanan" placeholder="Masukan pesanan">

    
    <div class="form-group">
    <label for="nama">no.telephon</label>
    <input name="no_Tlp" type="text"class="form-control" id="no_Tlp" placeholder="Masukan no_Tlp">


          </div>
        <button type="submit" class="btn btn-primary"flod-right>Simpan</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
