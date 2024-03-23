<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaDidik extends Model
{
    use HasFactory;

    protected $table = 'peserta_didik';

    protected $fillable = [
        'pemilik',
        'sekolah',
        'nama',
        'jenisKelamin',
        'jenisKetunaan',
        'kelas',
        'rombel',
    ];
}
