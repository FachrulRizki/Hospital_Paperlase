@extends('layout.layout')

@section('title','Edit Data Dokter')

@section('content')

    <div class="mt-5 col-5 m-auto">
        <form action="/dokter/{{ $ddokterList->kd_dokter }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="kd_dokter">Kode Dokter</label>
                <input type="text" name="kd_dokter" class="form-control" id="no" value={{ $ddokterList->kd_dokter }} required>
            </div>

            <div class="mb-3">
                <label for="nm_dokter">Nama Dokter</label>
                <input type="text" name="nm_dokter" class="form-control" id="nama" value={{ $ddokterList->nm_dokter }} required>
            </div>

            <div class="mb-3">
                <label for="id_poli">Id Poli</label>
                <input type="text" name="id_poli" class="form-control" id="id" value={{ $ddokterList->id_poli }} required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
                <a href="/dokter"><button class="btn btn-primary" type="submit">Batal</button></a>
            </div>
        </form>
    </div>

@endsection