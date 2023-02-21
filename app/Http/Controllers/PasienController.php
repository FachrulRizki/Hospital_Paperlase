<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PasienController extends Controller
{
    public function index()
    {
        $dpasien = Pasien::all();

        return view('admin/pasien', [
            "title" => "Pasien",
            "nama" => "Fachrul",
            "dpasienList"=> $dpasien
        ]);
        
    }

    public function create()
    {
        return view('crud/pasien-add',[
            "title" => "Add Pasien",
        ]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'no_rm' => 'unique:pasien',
            'NIK' => 'Max:16'
        ]);

        $dpasien = Pasien::create($request->all());
        if($dpasien){
            Session::flash('status','success');
            Session::flash('message','Data Pasien Berhasil di Tambahkan!');
        }

        return redirect('/pasien');

        return view('admin/pasien',[
            "title" => "Add Pasien",
            "nama" => "Fachrul",
            "dpasienList"=> $dpasien
        ]);
    }

    public function edit($no_rm)
    {
        return view('crud/pasien-edit',[
            "title" => "Edit Pasien",
            $dpasien = Pasien::findOrFail($no_rm),
            "dpasienList" => $dpasien
        ]);
    }

    public function update(Request $request, $no_rm)
    {
        $dpasien = Pasien::findOrFail($no_rm);

        $dpasien->update($request->all());
        return redirect('/pasien');
    }

    public function delete($no_rm)
    {
        return view('crud/pasien-delete',[
            "title" => "Hapus Pasien",
            $dpasien = Pasien::findOrFail($no_rm),
            "dpasienList" => $dpasien
        ]);
    }

    public function destroy($no_rm)
    {
        $deletepasien = Pasien::findOrFail($no_rm);
        $deletepasien->delete();

        if($deletepasien){
            Session::flash('status','success');
            Session::flash('message','Data Pasien Berhasil di Hapus!');
        }

        return redirect('/pasien');
    }
}
