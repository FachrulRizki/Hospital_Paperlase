@extends('layout.layout')

@section('title','Edit Registrasi Pasien')

@section('content')

    <div class="mt-5 col-5 m-auto">
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="no_rm">No_rm</label>
                <input type="text" name="no_rm" class="form-control" id="no" value="{{ $dregistrasiList->no_rm }}" required>
            </div>

            <div class="mb-3">
                <label for="no_registrasi">No Registrasi</label>
                <input type="text" name="no_registrasi" class="form-control" id="no" value="{{ $dregistrasiList->no_registrasi }}" required>
            </div>

            <div class="mb-3">
                <label for="no_rawat">No Rawat</label>
                <input type="text" name="no_rawat" class="form-control" id="no" value="{{ $dregistrasiList->no_rawat }}" required>
            </div>

            <div class="mb-3">
                <label for="id_poli_tujuan">Id Poli Tujuan</label>
                <input type="text" name="nid_poli_tujuan" class="form-control" id="no" value="{{ $dregistrasiList->id_poli_tujuan }}" required>
            </div>

            <div class="mb-3">
                <label for="tgl_registrasi">Tanggal Registrasi</label>
                <input type="text" name="tgl_registrasi" class="form-control" id="nama" value="{{ $dregistrasiList->tgl_registrasi }}" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
                <a href="/registrasi_pasien"><button class="btn btn-primary" type="submit">Batal</button></a>
            </div>
        </form>
    </div>

@endsection