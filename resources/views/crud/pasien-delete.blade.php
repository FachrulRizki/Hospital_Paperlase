@extends('layout.layout')

@section('title','Tambah Data Pasien')

@section('content')

<div class="container">
    <center>
    <div class="mt-5">
        <h2>apakah kamu yakin ingin hapus data : {{ $dpasienList->nama_pasien }}</h2>

        <form style="display: inline-block" action="/pasien-destroy/{{ $dpasienList->no_rm }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">HAPUS</button></a>
        </form>
        
        <a href="/pasien"><button class="btn btn-primary" type="submit">BATAL</button></
    </div>
</center>
</div>

@endsection