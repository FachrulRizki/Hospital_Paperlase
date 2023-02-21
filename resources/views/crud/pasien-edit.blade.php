@extends('layout.layout')

@section('title','Edit Data Pasien')

@section('content')
    <div class="mt-5 col-5 m-auto">
        <form action="/pasien/{{ $dpasienList->no_rm }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="no_rm">No_rm</label>
                <input type="text" name="no_rm" class="form-control" id="no" value={{ $dpasienList->no_rm }} required>
            </div>

            <div class="mb-3">
                <label for="nama_pasien">Nama Pasien</label>
                <input type="text" name="nama_pasien" class="form-control" id="nama" value={{ $dpasienList->nama_pasien }} required>
            </div>

            <div class="mb-3">
                <label for="NIK">NIK</label>
                <input type="text" name="NIK" class="form-control" id="nik" value={{ $dpasienList->NIK }} required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
                <a href="/pasien"><button class="btn btn-primary" type="submit">Batal</button></a>
            </div>
        </form>
    </div>

@endsection