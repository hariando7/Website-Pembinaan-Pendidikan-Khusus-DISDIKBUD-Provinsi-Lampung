<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KebutuhanGuru extends Model
{
    use HasFactory;
    
    protected $table = 'kebutuhan_guru';

    protected $fillable = [
        'pemilik',
        'sekolah',
        'mataPelajaran',
        'jumlahDibutuhkan',
        'jumlahSaatIni',
        'lebihKurang',
        'keterangan',
    ];
}
