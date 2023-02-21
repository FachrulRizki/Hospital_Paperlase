@extends('layout.layout')

@section('title','Hapus Data Dokter')

@section('content')

<div class="container">
    <div class="mt-5">
        <h2>apakah kamu yakin ingin hapus data : {{ $ddokterList->kd_dokter }}</h2>

        <form style="display: inline-block" action="/dokter-destroy/{{ $ddokterList->kd_dokter }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">HAPUS</button></a>
        </form>
        
        <a href="/dokter"><button class="btn btn-primary" type="submit">BATAL</button>
    </div>
</div>

@endsection