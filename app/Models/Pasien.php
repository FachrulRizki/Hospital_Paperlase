<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_rm',
        'nama_pasien',
        'NIK'
    ];

    protected $table = 'pasien';
    protected $primaryKey = 'no_rm';
    protected $keyType = 'double';
    public $incrementing = false;
    public $timestamps = false;
    
}
