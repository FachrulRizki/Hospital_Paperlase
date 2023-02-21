<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $ddokter = [
        //     ['kd_dokter'=>'D001','nm_dokter'=> 'Dr. Riska A.W','id_poli'=>'1A'],
        //     ['kd_dokter'=>'D002','nm_dokter'=> 'Dr. Lisa Indri Yani','id_poli'=>'2P.D'],
        //     ['kd_dokter'=>'D003','nm_dokter'=> 'Dr. Fachrul Rizki','id_poli'=>'3B.U'],
        //     ['kd_dokter'=>'D004','nm_dokter'=> 'Dr. Dodi Marlison','id_poli'=>'4M'],
        //     ['kd_dokter'=>'D005','nm_dokter'=> 'Dr. Jaka Wijaya','id_poli'=>'5S'],
        //     ['kd_dokter'=>'D006','nm_dokter'=> 'Dr. Hafiz Alfarizi','id_poli'=>'6J']
        // ];

        // foreach ($ddokter as $data){
        //     Dokter::insert([
        //         'kd_dokter' => $data['kd_dokter'],
        //         'nm_dokter' => $data['nm_dokter'],
        //         'id_poli' => $data['id_poli']
        //     ]);
        // }

        Dokter::factory()->count(10)->create();
    }
}
