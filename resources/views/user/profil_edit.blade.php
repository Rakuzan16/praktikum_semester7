@extends('layouts.app') 
@section('content') 
<div class="card"> 
    <div class="card-header">
         Edit Profil
        </div>
    <div class="card-body">
        <form action="{{route('profilUpdate',$user->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group mt-3">
        <label for="">Nama</label>
        <input type="text" name="nama" class="form-control" value="{{$user->nama}}">
    </div>
    <div class="form-group mt-3">
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" value="{{$user->tanggal_lahir}}">
    </div>
    <div class="form-group mt-3">
        <label for="">Nomor Telepon</label>
        <input type="text" name="nomor_telepon" class="form-control" value="{{$user->nomor_telepon}}">
    </div>
    <div class="form-group mt-3">
        <label for="">Foto</label>
        <input type="file" name="foto" class="form-control">
        <small> Isi jika ingin merubah foto Profil</small>
    </div>
    <div class="form-group mt-3">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control">
        <small> Isi jika ingin merubah Username</small>
    </div>
    <div class="form-group mt-3">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control">
        <small> Isi jika ingin merubah Password</small>
    </div>

    <div class="float-end mt-3">
        <a href="{{route('profil')}}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Update Data</button>
</div>
</form>
</div>

@endsection