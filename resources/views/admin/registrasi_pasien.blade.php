@extends('layout.layout')

@section('title','RegistrasiPasien')

@section('content')
    
    <div class="container"><br>
        <center>
            <h1>Hallo Selamat Datang di Halaman Registrasi Pasien</h1>
        </center>

        <div class="my-5">
            @if (Auth::user()->role_id != 1)
                        -
                    @else
            <a href="/registp-add" class="btn btn-primary">Registrasi Pasien</a>
            @endif
        </div>

        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <h5>Daftar Pasien</h5>
        <table class="table">
            <tr>
                <th>No_rm</th>
                <th>No Registrasi</th>
                <th>No Rawat</th>
                <th>Id Poli Tujuan</th>
                <th>Tgl Registrasi</th>
                <th>Keterangan</th>
            </tr>
            @foreach ($dregistrasiList as $data)
            <tr>
                <td>{{ $data->no_rm }}</td>
                <td>{{ $data->no_registrasi }}</td>
                <td>{{ $data->no_rawat }}</td>
                <td>{{ $data->id_poli_tujuan }}</td>
                <td>{{ $data->tgl_registrasi }}</td>

                <td>
                    @if (Auth::user()->role_id != 1)
                        -
                    @else
                    <a href="/registp-edit/{{ $data->no_registrasi}}"><button class="btn btn-success" type="submit">Edit</button></a>
                    @endif

                    @if (Auth::user()->role_id != 1)
                        -
                    @else
                    <a href="/registp-delete/{{ $data->no_registrasi }}"><button class="btn btn-danger" type="submit">Hapus</button></a>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection