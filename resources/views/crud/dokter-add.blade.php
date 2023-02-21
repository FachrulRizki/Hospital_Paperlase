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

        <form action="dokter" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kd_dokter">Kode Dokter</label>
                    <input type="text" name="kd_dokter" placeholder="Cth. D0012" class="form-control" id="no" required>
                </div>

                <div class="mb-3">
                    <label for="nm_dokter">Nama Dokter</label>
                    <input type="text" name="nm_dokter" class="form-control" id="no" required>
                </div>

                <div class="mb-3">
                    <label for="id_poli">Id Poli</label>
                    <select name="id_poli" id="kd" class="form-control" required>
                        <option value="">Pilih Id. Poli Pasien</option>
                        @foreach ($dpoli as $item)
                            <option value="{{ $item->id_poli }}">{{ $item->id_poli }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Simpan</button>
                </div>
            </form>
        </div>
@endsection