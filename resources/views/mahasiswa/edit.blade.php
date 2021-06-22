@extends('layout/main')

@section('title','Edit Data Mahasiswa')

@section('container')

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-10">
        <center><h3>Edit Data Mahasiswa</h3></center>
        <br>
        <form method="post" action="{{asset('mahasiswa')}}/{{$mahasiswa->id}}">
        @method('patch')
        @csrf
          <div class="row mb-3">
            <label for="Nbi" class="col-sm-2 col-form-label">Nbi</label>
            <div class="col-sm-6">
              <input type="number"  class="form-control" name="nbi" value="{{$mahasiswa->id}}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="nama"  value="{{$mahasiswa->nama}}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="Tempat" class="col-sm-2 col-form-label">Tempat, Tgl Lahir</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="tmp"  value="{{$mahasiswa->tmp_tgl}}">
            </div>
          </div>
  

          <button type="submit" class="btn btn-primary">Edit Data</button>
        </form>       

    </div>
  </div>
</div>



 
@endsection