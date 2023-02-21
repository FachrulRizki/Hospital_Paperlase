@extends('layout.layout')

@section('title','Tambah Data Pasien')

@section('content')

    <div class="mt-5 col-5 m-auto">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="pasien" method="POST">
            @csrf

            <div class="mb-3">
                <label for="no_rm">No_rm</label>
                <input type="text" name="no_rm" class="form-control" id="no" required>
            </div>

            <div class="mb-3">
                <label for="nama_pasien">Nama Pasien</label>
                <input type="text" name="nama_pasien" class="form-control" id="nama" required>
            </div>

            <div class="mb-3">
                <label for="NIK">NIK</label>
                <input type="text" name="NIK" class="form-control" id="nik" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>                
            </div>
        </form>
    </div>

@endsection