<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// Daftar Pasien Model
class Daftar extends Model
{
    //
    protected $table = 'pasiens';
    public $fillable = ['nama_pasien','kartu_identitas','umur','jenis_kelamin'];
}
