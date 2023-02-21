@extends('layout.layout')

@section('title','PemeriksaanPasien')

    @section('content')
    
    <div class="container"><br>
        <center>
            <h1>Hallo Selamat Datang di Halaman Pemeriksaan Pasien</h1>
        </center><br>
        <h5>Daftar Pasien</h5>
        <table class="table">
            <tr>
                <th>No Rawat</th>
                <th>Kode Dokter</th>
                <th>Keterangan Diagnosa</th>
            </tr>
            @foreach ($dpriksapasienList as $data)
            <tr>
                <td>{{ $data->no_rawat }}</td>
                <td>{{ $data->kd_dokter }}</td>
                <td>{{ $data->ket_diagnosa }}</td>
            </tr>
            @endforeach
        </table>
    </div>

    @endsection