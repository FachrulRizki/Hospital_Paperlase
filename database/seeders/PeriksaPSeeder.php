<?php

namespace Database\Seeders;

use App\Models\PemeriksaanPasien;
use Illuminate\Database\Seeder;

class PeriksaPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dperiksap = [
            ['no_rawat'=>'03 Aggrek','kd_dokter'=> 'D001','ket_diagnosa'=>'Memiliki berat badan yang rendah. 
            Orang yang indeks massa tubuhnya di bawah 18,5 berisiko kekurangan gizi.
            Merasa lelah sepanjang waktu.
            Kesulitan untuk tetap hangat.'],

            ['no_rawat'=>'12 Melati','kd_dokter'=> 'D002','ket_diagnosa'=>'Pada anamnesis dermatitis kontak alergi (Dermatitis KA), 
            umumnya pasien datang dengan keluhan gatal disertai ruam kemerahan hingga bengkak.
            Keluhan juga bisa berupa rasa perih seperti terbakar, tetapi tidak sesering keluhan gatal.
            Lokasi keluhan sesuai dengan area yang berkontak dengan alergen.
            Predileksi yang sering adalah tangan, kaki, dan wajah.'],

            ['no_rawat'=>'33 Jati','kd_dokter'=> 'D003','ket_diagnosa'=>
            'Nyeri perut mendadak yang dimulai di sisi kanan perut bagian bawah.
            Nyeri perut yang bermula di sekitar pusar, lalu berpindah ke perut kanan bawah.
            Nyeri perut kanan bawah yang terasa semakin buruk saat batuk, berjalan, atau bergerak.
            Mual dan muntah.'],

            ['no_rawat'=>'30 Mawar','kd_dokter'=> 'D004','ket_diagnosa'=>'Konjungtivitis adalah mata merah akibat peradangan pada selaput yang melapisi,
            permukaan bola mata dan kelopak mata bagian dalam (konjungtiva mata).
            Selain mata merah, konjungtivitis dapat disertai rasa gatal pada mata dan mata berair.'],

            ['no_rawat'=>'10 Matahari','kd_dokter'=> 'D005','ket_diagnosa'=>'Penderita yang terkena penyakit ensefalitis atau infeksi otak biasnaya 
            merasa demam dan sakit kepala yang berlebihan.
            Selain ituperasaan mengantuk dan juga bingung kerap terjadi pada mereka. Penyebab dari penyakit ini adalah virus.
            Dalam diri anda, bagian sistem imun akan mencoba untuk melawan infeksi otak.'],

            ['no_rawat'=>'99 Tulip','kd_dokter'=> 'D006','ket_diagnosa'=>'Metode elektrokardiografi atau EKG memiliki tujuan untuk mendeteksi kelainan pada irama dan struktur jantung dengan merekan sinyal 
            listrik pada jantung yang dapat dilakukan ketika pasien sedang berolahraga atau istirahat.
            Metode EKG dilakukan dengan menempelkan 10 – 12 elektroda yang menghubungkan antara 
            tubuh pasien dengan mesin yang akan merekan sinyal listrik jantung pasien.']
        ];

        foreach ($dperiksap as $data){
            PemeriksaanPasien::insert([
                'no_rawat' => $data['no_rawat'],
                'kd_dokter' => $data['kd_dokter'],
                'ket_diagnosa' => $data['ket_diagnosa']
            ]);
        }
    }
}
