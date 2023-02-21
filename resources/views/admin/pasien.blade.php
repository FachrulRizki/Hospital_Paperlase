@extends('layout.layout')

@section('title','Pasien')

@section('content')
    
    <div class="container"><br>
        <center>
            <h1>Hallo Selamat Datang di Halaman Pasien</h1>
        </center>

        <div class="my-5">
            @if (Auth::user()->role_id != 1)
                        -
                    @else
            <a href="/pasien-add" class="btn btn-primary">Tambah Data Pasien</a>
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
                <th>No.</th>
                <th>NAMA PASIEN</th>
                <th>NIK</th>
                <th>KETERANGAN</th>
            </tr>
            @foreach ($dpasienList as $data)
            <tr>
                <td>{{ $data->no_rm }}</td>
                <td>{{ $data->nama_pasien }}</td>
                <td>{{ $data->NIK }}</td>

                <td>
                    @if (Auth::user()->role_id != 1)
                        -
                    @else
                    <a href="pasien-edit/{{ $data->no_rm }}"><button class="btn btn-success" type="submit">Edit</button></a>
                    @endif

                    @if (Auth::user()->role_id != 1)
                        -
                    @else
                    <a href="pasien-delete/{{ $data->no_rm }}"><button class="btn btn-danger" type="submit">Hapus</button></a>
                    @endif
                </td>

            </tr>
            @endforeach
        </table>
    </div>
@endsection