<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $dpasien = [
        //     ['no_rm'=> 1.0,'nama_pasien'=>'Fachrul Rizki','NIK'=>'181820346718'],
        //     ['no_rm'=> 2.0,'nama_pasien'=>'Eka Nofi Tarisa','NIK'=>'191928345670'],
        //     ['no_rm'=> 3.0,'nama_pasien'=>'Agus Samsudin','NIK'=>'880998007688'],
        //     ['no_rm'=> 4.0,'nama_pasien'=>'Budi Santoso','NIK'=>'907856342121'],
        //     ['no_rm'=> 5.0,'nama_pasien'=>'Putera Kandias','NIK'=>'789066752145'],
        //     ['no_rm'=> 6.0,'nama_pasien'=>'Raisya Qurotayun','NIK'=>'892106735481'],
        //     ['no_rm'=> 7.0,'nama_pasien'=>'Azzahra Khoiriyah','NIK'=>'565678930288'],
        //     ['no_rm'=> 8.0,'nama_pasien'=>'AKhmad Khusein','NIK'=>'782374658900'],
        //     ['no_rm'=> 9.0,'nama_pasien'=>'Khoirul Azzam','NIK'=>'189102938476'],
        //     ['no_rm'=> 10.0,'nama_pasien'=>'Deny Caknan','NIK'=>'214365879090'],
        // ];

        // foreach ($dpasien as $data){
        //     Pasien::insert([
        //         'no_rm' => $data['no_rm'],
        //         'nama_pasien' => $data['nama_pasien'],
        //         'NIK' => $data['NIK']
        //     ]);
        // }

        Pasien::factory()->count(10)->create();
    }
}
