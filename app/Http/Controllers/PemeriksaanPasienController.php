<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanPasien;
use Illuminate\Http\Request;

class PemeriksaanPasienController extends Controller
{
    public function index()
    {
        $dperiksapasien = PemeriksaanPasien::all();

        return view('admin/pemeriksaan_pasien', [
            "title" => "Pemeriksaan Pasien",
            "nama" => "Fachrul",
            "dpriksapasienList"=> $dperiksapasien
        ]);
    }

    public function create()
    {
        return view('crud/periksap-add',[
            "title" => "Add Pemeriksaan Pasien",
        ]);
    }
}
