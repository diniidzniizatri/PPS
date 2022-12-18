<?php

namespace App\Models;

use illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\Model;

class modelPenilaianMahasiswa extends Model
{
    // use HasFactory;

    protected $table = 'penilaianmahasiswa';
    protected $fillable = ['','namamhs','nrp','lab','judulta','nilaita','tglsidang','',''];
}