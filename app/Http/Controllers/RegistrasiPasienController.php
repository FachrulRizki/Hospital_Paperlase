<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Poli;
use App\Models\RegistrasiPasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegistrasiPasienController extends Controller
{
    public function index()
    {
        $dregistrasi = RegistrasiPasien::all();

        return view('admin/registrasi_pasien', [
            "title" => "Registrasi Pasien",
            "nama" => "Fachrul",
            "dregistrasiList"=> $dregistrasi
        ]);
    }

    public function create()
    {
        $dpasien = Pasien::select('no_rm','nama_pasien')->get();
        return view('crud/registp-add',[
            "title" => "Add Registrasi Pasien",
            "dpasien" => $dpasien
        ]);

        // $dpoli = Poli::select('id_poli')->get();
        // return view('crud/registp-add',[
        //     "title" => "Add Registrasi Pasien",
        //     "dpoli" => $dpoli
        // ]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'no_registrasi' => 'unique:registrasi_pasien'
        ]);

        $dpasien = Poli::create($request->all());
        if($dpasien){
            Session::flash('status','success');
            Session::flash('message','Data Pasien Berhasil di Tambahkan!');
        }

        $dpasien = Poli::create($request->all());
        if($dpasien){
            Session::flash('status','success');
            Session::flash('message','Data Pasien Berhasil di Tambahkan!');
        }

        $dregistrasi = RegistrasiPasien::create($request->all());
        return redirect('/registrasi_pasien');

        return view('admin/registrasi_pasien',[
            "title" => "Add Registrasi Pasien",
            "dregistrasiList"=> $dregistrasi
        ]);
    }

    public function edit($no_registrasi)
    {
        return view('crud/registp-edit', [
            "title" => "Registrasi Pasien",
            $dregistrasi = Pasien::findOrFail($no_registrasi),
            "dregistrasiList"=> $dregistrasi
        ]);
    }

    // public function update(Request $request, $no_rm)
    // {
    //     $dpoli = Poli::findOrFail($no_rm);

    //     $dpoli->update($request->all());
    //     return redirect('/registrasi_pasien');
    // }

    public function delete($no_registrasi)
    {
        return view('crud/registp-delete',[
            "title" => "Hapus Data Registrasi",
            $dregistrasi = Pasien::findOrFail($no_registrasi),
            "dregistrasiList" => $dregistrasi
        ]);
    }

    public function destroy($no_registrasi)
    {
        $deleteregist = Pasien::findOrFail($no_registrasi);
        $deleteregist->delete();
        
        if($deleteregist){
            Session::flash('status','success');
            Session::flash('message','Data Pasien Berhasil di Hapus!');
        }

        return redirect('/registrasi_pasien');
    }
}
