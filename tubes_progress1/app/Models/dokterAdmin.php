<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dokterAdmin extends Model
{
    protected $fillable = [
        'id_dokter',
        'Nama_Dokter',
        'Poliklinik'
    ];
}
