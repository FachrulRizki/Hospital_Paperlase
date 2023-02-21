@extends('layout.layout')

@section('title','Hapus Data Poli')

@section('content')

<div class="container">
    <div class="mt-5">
        <h2>apakah kamu yakin ingin hapus data : {{ $dpoliList->id_poli }}</h2>

        <form style="display: inline-block" action="/poli-destroy/{{ $dpoliList->id_poli }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">HAPUS</button></a>
        </form>
        
        <a href="/poli"><button class="btn btn-primary" type="submit">BATAL</button></
    </div>
</div>

@endsection