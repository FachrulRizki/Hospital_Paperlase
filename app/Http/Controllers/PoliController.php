<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PoliController extends Controller
{
    public function index()
    {
        $dpoli = Poli::all();

        return view('admin/poli', [
            "title" => "Poli",
            "nama" => "Fachrul",
            "dpoliList"=> $dpoli
        ]);
    }

    public function create()
    {
        return view('crud/poli-add',[
            "title" => "Add Poli",
        ]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'id_poli' => 'unique:poli'
        ]);

        $dpasien = Poli::create($request->all());
        if($dpasien){
            Session::flash('status','success');
            Session::flash('message','Data Pasien Berhasil di Tambahkan!');
        }

        
        $dpoli = Poli::create($request->all());
        return redirect('/poli');

        return view('admin/poli',[
            "title" => "Add Poli",
            "nama" => "Fachrul",
            "dpoliList"=> $dpoli
        ]);
    }

    public function edit($id_poli)
    {
        return view('crud/poli-edit',[
            "title" => "Edit Poli",
            $dpoli = Poli::findOrFail($id_poli),
            "dpoliList" => $dpoli
        ]);
    }

    public function update(Request $request, $id_poli)
    {
        $dpoli = Poli::findOrFail($id_poli);

        $dpoli->update($request->all());
        return redirect('/poli');
    }

    public function delete($id_poli)
    {
        return view('crud/poli-delete',[
            "title" => "Hapus Data Poli",
            $dpoli = Poli::findOrFail($id_poli),
            "dpoliList" => $dpoli
        ]);
    }

    public function destroy($id_poli)
    {
        $deletepoli = Poli::findOrFail($id_poli);
        $deletepoli->delete();

        if($deletepoli){
            Session::flash('status','success');
            Session::flash('message','Data Pasien Berhasil di Hapus!');
        }

        return redirect('/poli');
    }
}
