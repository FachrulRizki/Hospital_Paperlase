<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_dokter',
        'nm_dokter',
        'id_poli'
    ];

    protected $table = 'dokter';
    protected $primaryKey = 'kd_dokter';
    protected $foreignkey = "id_poli";
    public $incrementing = false;
    public $timestamps = false;
}
