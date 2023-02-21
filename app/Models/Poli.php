<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_poli',
        'nm_poli'
    ];

    protected $table = 'poli';
    protected $primaryKey = 'id_poli';
    public $incrementing = false;
    public $timestamps = false;
}
