@extends('layout.layoutdpp')

@section('title','Dokter Periksa')

@section('content')
    
    <body>
        <div class="container"><br>
            <center>
                <h1 class="fw-bold">SELAMAT DATANG DI DAFTAR PEMERIKSAAN PASIEN</h1>
            </center>

            <div class="my-5">
                <a href="/periksap-add" class="btn btn-primary">Tambah Data Periksa</a>
            </div>

            <table class="table">
                <tr>
                    <th>Data Pasien</th>
                    <th>Poli</th>
                    <th>Nama Dokter</th>
                    <th>Diagnosa Penyakit</th>
                </tr>
               <tr>
                <td>Budi Santoso</td>
                <td>1A</td>
                <td>Dr. Riska Andarweni</td>
                <td>
                    <li>Memiliki berat badan yang rendah bawah 18,5 berisiko kekurangan gizi.</li>
                    <li>Merasa lelah sepanjang waktu</li>
                    <li>Kesulitan untuk tetap hangat</li>
               </tr>
            </table>

        </div>
    </body>

@endsection