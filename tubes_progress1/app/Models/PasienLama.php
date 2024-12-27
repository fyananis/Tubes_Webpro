<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasienLama extends Model
{
    //
   public $fillable = ['nama_pasien','kartu_identitas','nomer_rekam_medis'];
    protected $table = 'pasien_lamas';
}
