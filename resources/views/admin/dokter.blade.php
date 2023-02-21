@extends('layout.layout')

@section('title','Dokter')

@section('content')
    
    <div class="container"><br>
        <center>
            <h1>Hallo Selamat Datang di Halaman Dokter</h1>
        </center>

        <div class="my-5">
            @if (Auth::user()->role_id != 1)
                        -
                    @else
            <a href="/dokter-add" class="btn btn-primary">Tambah Data Dokter</a>
            @endif
        </div>

        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
        
        <h5>Daftar Dokter</h5>
        <table class="table">
            <tr>
                <th>Kode Dokter</th>
                <th>Nama Dokter</th>
                <th>Id Poli</th>
                <th>Keterangan</th>
            </tr>
            @foreach ($ddokterList as $data)
            <tr>
                <td>{{ $data->kd_dokter }}</td>
                <td>{{ $data->nm_dokter }}</td>
                <td>{{ $data->id_poli }}</td>

                <td>
                    @if (Auth::user()->role_id != 1)
                        -
                    @else
                    <a href="dokter-edit/{{ $data->kd_dokter }}"><button class="btn btn-success" type="submit">Edit</button></a>
                    @endif

                    @if (Auth::user()->role_id != 1)
                        -
                    @else
                    <a href="dokter-delete/{{ $data->kd_dokter }}"><button class="btn btn-danger" type="submit">Hapus</button></a>
                    @endif
                </td>
                
            </tr>
            @endforeach
        </table>
    </div>
@endsection