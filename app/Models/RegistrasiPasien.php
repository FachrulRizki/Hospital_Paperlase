<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrasiPasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_rm',
        'no_registrasi',
        'no_rawat',
        'id_poli_tujuan',
        'tgl_registrasi'
    ];

    protected $table = 'registrasi_pasien';
    public $incrementing = false;
    public $timestamps = false;
}
