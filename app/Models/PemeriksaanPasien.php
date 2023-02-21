<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanPasien extends Model
{
    use HasFactory;

    protected $table = 'periksa_pasien';
    public $incrementing = false;
    public $timestamps = false;
}
