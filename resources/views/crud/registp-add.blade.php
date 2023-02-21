@extends('layout.layout')

@section('title','Registrasi Pasien')

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

        <form action="registrasi_pasien" method="POST">
            @csrf
            <div class="mb-3">
                <label for="no_rm">No_rm</label>
                <select name="no_rm" id="no" class="form-control" required>
                    <option value="">Pilih No.Pasien</option>
                    @foreach ($dpasien as $item)
                        <option value="{{ $item->no_rm }}">{{ $item->no_rm }}. {{ $item->nama_pasien }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="no_registrasi">No Registrasi</label>
                <input type="text" name="no_registrasi" placeholder="Cth. 001" class="form-control" id="no" required>
            </div>

            <div class="mb-3">
                <label for="no_rawat">No Rawat</label>
                <input type="text" name="no_rawat" placeholder="Cth. 2023/02/02/001" class="form-control" id="no" required>
            </div>

            <div class="mb-3">
                <label for="id_poli_tujuan">Id Poli Tujuan</label>
                <input type="text" name="id_poli_tujuan" class="form-control" id="no" required>
            </div>

            {{-- <div class="mb-3">
                <label for="id_poli_tujuan">Id Poli Tujuan</label>
                <select name="id_poli" id="no" class="form-control" required>
                    <option value="">Pilih Id Poli</option>
                    @foreach ($dpoli as $item)
                    <option value="{{ $item->id_poli }}">{{ $item->id_poli }}</option>
                        
                    @endforeach
                </select>
            </div> --}}

            <div class="mb-3">
                <label for="tgl_registrasi">Tanggal Registrasi</label>
                <input type="text" name="tgl_registrasi" class="form-control" id="tgl" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection