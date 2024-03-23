<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaPendidik extends Model
{
    use HasFactory;

    protected $table = 'tenaga_pendidik';

    protected $fillable = [
        'pemilik',
        'sekolah',
        'nama',
        'jenisKelamin',
        'nip',
        'statusPNS',
        'bidangPekerjaan',
    ];
}
