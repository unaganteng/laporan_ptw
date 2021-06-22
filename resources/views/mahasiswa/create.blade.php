@extends('layout/main')

@section('title','Tambah Data Mahasiswa')

@section('container')

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-10">
        <center><h3>Tambah Data Mahasiswa</h3></center>
        <br>
        <form method="post" action="{{asset('mahasiswa')}}">
        @csrf
          <div class="row mb-3">
            <label for="Nbi" class="col-sm-2 col-form-label">Nbi</label>
            <div class="col-sm-6">
              <input type="number"  class="form-control" name="nbi" placeholder="Masukkan Nbi">
            </div>
          </div>
          <div class="row mb-3">
            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
            </div>
          </div>
          <div class="row mb-3">
            <label for="Tempat" class="col-sm-2 col-form-label">Tempat, Tgl Lahir</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="tmp" placeholder="Tempat, Tanggal Lahir">
            </div>
          </div>
  

          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>       

    </div>
  </div>
</div>



 
@endsection