@extends('layout/main')

@section('title','Data Mahasiswa')

@section('container')

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-10">
        <center><h3>Data Mahasiswa</h3></center>
        <br>
        <p class="text-end"><a href="{{asset('mahasiswa')}}/create" class="btn btn-primary">Tambah Data</a></p>
        @if (session('status'))
        <div class="alert alert-success">
        {{ session('status')}}
        </div>
        @endif
        <table class="table table-dark table-striped table-responsive-lg" >
        <thead>
            <tr  class="table-dark" >
            <th scope="col">No</th>
            <th scope="col">Nbi</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Tanggal Lahir</th>
            <th scope="col">Aksi</th>
            </tr>
            </thead>
        <tbody>
        <?php $i=1; ?>

        @foreach($mahasiswa as $m)

            <tr class="table-active">
            <th scope="row">{{$i}}</th>
            <td>{{$m->id}}</td>
            <td>{{$m->nama}}</td>
            <td>{{$m->tmp_tgl}}</td>
            <td><a class="badge bg-success" href="{{asset('mahasiswa')}}/{{$m->id}}">Show</a> <a class="badge bg-info" href="{{asset('mahasiswa/edit')}}/{{$m->id}}">Edit</a> <a class="badge bg-danger" href="{{asset('mahasiswa/delete')}}/{{$m->id}}">Delete</a></td>
            </tr>
            <?php $i++;?>
        @endforeach

        </tbody>
        </table>
    </div>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-md-auto"><br>
    <center><h3>Cetak Data Mahasiswa</h3></center>

    <form method="post" action="{{asset('mahasiswa')}}" class="row row-cols-lg-auto g-3 align-items-center">
    @method('put')
    @csrf
    <div class="col-12">
        <label class="visually-hidden" for="inlineFormInputGroupUsername">NBI</label>
        <div class="input-group">
        <div class="input-group-text">Masukkan Nbi</div>
        <input type="text" class="form-control" name="nbi" placeholder="Masukkan Nbi">
        </div>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

    </div>
  </div>
</div>



 
@endsection