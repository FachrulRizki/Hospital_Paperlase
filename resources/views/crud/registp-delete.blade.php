@extends('layout.layout')

@section('title','Hapus Data Registrasi')

@section('content')

<div class="container">
    <div class="mt-5">
        <h2>apakah kamu yakin ingin hapus data : {{ $dregistrasiList->no_registrasi }}</h2>

        <form style="display: inline-block" action="/registp-destroy/{{ $dregistrasiList->no_registrasi }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">HAPUS</button></a>
        </form>
        
        <a href="/registrasi_pasien"><button class="btn btn-primary" type="submit">BATAL</button></
    </div>
</div>

@endsection