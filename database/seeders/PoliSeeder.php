<?php

namespace Database\Seeders;

use App\Models\Poli;
use Illuminate\Database\Seeder;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $dpoli = [
        //     ['id_poli'=>'1A','nm_poli'=> 'Anak'],
        //     ['id_poli'=>'2P.D','nm_poli'=> 'Penyakit Dalam'],
        //     ['id_poli'=>'3B.U','nm_poli'=> 'Bedah Umum'],
        //     ['id_poli'=>'4M','nm_poli'=> 'Mata'],
        //     ['id_poli'=>'5S','nm_poli'=> 'Syaraf'],
        //     ['id_poli'=>'6J','nm_poli'=> 'Jantung']
        // ];

        // foreach ($dpoli as $data){
        //     Poli::insert([
        //         'id_poli' => $data['id_poli'],
        //         'nm_poli' => $data['nm_poli']
        //     ]);
        // }

        Poli::factory()->count(10)->create();
    }
}
