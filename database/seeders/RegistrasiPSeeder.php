<?php

namespace Database\Seeders;

use App\Models\RegistrasiPasien;
use Illuminate\Database\Seeder;

class RegistrasiPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $dregistp = [
        //     ['no_rm'=> 1,'no_registrasi'=> '001','no_rawat'=>'03 Aggrek','id_poli_tujuan'=>'1A','tgl_registrasi'=>date('Y-m-d H:i:s')],
        //     ['no_rm'=> 2,'no_registrasi'=> '002','no_rawat'=>'12 Melati','id_poli_tujuan'=>'2P.D','tgl_registrasi'=>date('Y-m-d H:i:s')],
        //     ['no_rm'=> 3,'no_registrasi'=> '003','no_rawat'=>'33 Jati','id_poli_tujuan'=>'3B.U','tgl_registrasi'=>date('Y-m-d H:i:s')],
        //     ['no_rm'=> 4,'no_registrasi'=> '004','no_rawat'=>'30 Mawar','id_poli_tujuan'=>'4M','tgl_registrasi'=>date('Y-m-d H:i:s')],
        //     ['no_rm'=> 5,'no_registrasi'=> '005','no_rawat'=>'10 Matahari','id_poli_tujuan'=>'5S','tgl_registrasi'=>date('Y-m-d H:i:s')],
        //     ['no_rm'=> 6,'no_registrasi'=> '006','no_rawat'=>'99 Tulip','id_poli_tujuan'=>'6J','tgl_registrasi'=>date('Y-m-d H:i:s')]
        // ];

        // foreach ($dregistp as $data){
        //     RegistrasiPasien::insert([
        //         'no_rm' => $data['no_rm'],
        //         'no_registrasi' => $data['no_registrasi'],
        //         'no_rawat' => $data['no_rawat'],
        //         'id_poli_tujuan' => $data['id_poli_tujuan'],
        //         'tgl_registrasi' => $data['tgl_registrasi']
        //     ]);
        // }

        RegistrasiPasien::factory()->count(10)->create();
    }
}
