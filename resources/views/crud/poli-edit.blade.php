@extends('layout.layout')

@section('title','Edit Data Poli')

@section('content')
    <div class="mt-5 col-5 m-auto">
        <form action="/poli/{{ $dpoliList->id_poli }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="id_poli">Id Poli</label>
                <input type="text" name="id_poli" class="form-control" id="no" value={{ $dpoliList->id_poli }} required>
            </div>

            <div class="mb-3">
                <label for="nm_poli">Nama Poli</label>
                <input type="text" name="nm_poli" class="form-control" id="nama" value={{ $dpoliList->nm_poli }} required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
                <a href="/poli"><button class="btn btn-primary" type="submit">Batal</button></a>
            </div>
        </form>
    </div>

@endsection