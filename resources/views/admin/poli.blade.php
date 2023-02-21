@extends('layout.layout')

@section('title','Poli')

    @section('content')
    
    <div class="container"><br>
        <center>
            <h1>Hallo Selamat Datang di Halaman Poli Pasien</h1>
        </center>

        <div class="my-5">
            @if (Auth::user()->role_id != 1)
                        -
                    @else
            <a href="/poli-add" class="btn btn-primary">Tambah Data Poli</a>
            @endif
        </div>

        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <h5>Daftar Poli Pasien</h5>
        <table class="table">
            <tr>
                <th>Id Poli</th>
                <th>Nama Poli</th>
                <th>Keterangan</th>
            </tr>
            @foreach ($dpoliList as $data)
            <tr>
                <td>{{ $data->id_poli }}</td>
                <td>{{ $data->nm_poli }}</td>

                <td>
                    @if (Auth::user()->role_id != 1)
                        -
                    @else
                    <a href="poli-edit/{{ $data->id_poli }}"><button class="btn btn-success" type="submit">Edit</button></a>
                    @endif

                    @if (Auth::user()->role_id != 1)
                        -
                    @else
                    <a href="poli-delete/{{ $data->id_poli }}"><button class="btn btn-danger" type="submit">Hapus</button></a>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    @endsection