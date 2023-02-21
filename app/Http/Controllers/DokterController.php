<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DokterController extends Controller
{
    public function index()
    {
        $ddokter = Dokter::all();

        return view('admin/dokter', [
            "title" => "Dokter",
            "nama" => "Fachrul",
            "ddokterList"=> $ddokter
        ]);
    }

    public function create()
    {
        $dpoli = Poli::select('id_poli')->get();
        return view('crud/dokter-add',[
            "title" => "Add Dokter",
            "dpoli" => $dpoli
        ]);
    }

    public function store(Request $request)
    {
        
        $ddokter = Dokter::create($request->all());
        return redirect('/dokter');

        return view('admin/dokter',[
            "title" => "Add Dokter",
            "ddokteriList"=> $ddokter
        ]);
    }

    public function edit($kd_dokter)
    {
        return view('crud/dokter-edit',[
            "title" => "Edit Data Dokter",
            $ddokter = Dokter::findOrFail($kd_dokter),
            "ddokterList" => $ddokter
        ]);
    }

    public function update(Request $request, $kd_dokter)
    {
        $ddokter = Dokter::findOrFail($kd_dokter);

        $ddokter->update($request->all());
        return redirect('/dokter');
    }

    public function delete($kd_dokter)
    {
        return view('crud/dokter-delete',[
            "title" => "Hapus Data Dokter",
            $ddokter = Dokter::findOrFail($kd_dokter),
            "ddokterList" => $ddokter
        ]);
    }

    public function destroy($kd_dokter)
    {
        $deletedokter = Dokter::findOrFail($kd_dokter);
        $deletedokter->delete();
        
        if($deletedokter){
            Session::flash('status','success');
            Session::flash('message','Data Pasien Berhasil di Hapus!');
        }

        return redirect('/dokter');
    }
}
