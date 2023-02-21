@extends('layout.layout')

@section('title','Tambah Data Poli')

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

        <form action="poli" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id_poli">Id Poli</label>
                <input type="text" name="id_poli" placeholder="Cth. 1A" class="form-control" id="id" required>
            </div>

            <div class="mb-3">
                <label for="nm_poli">Nama Poli</label>
                <input type="text" name="nm_poli" placeholder="Cth. Anak" class="form-control" id="nama" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection