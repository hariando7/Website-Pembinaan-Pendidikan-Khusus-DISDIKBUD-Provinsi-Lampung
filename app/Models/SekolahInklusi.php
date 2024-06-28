<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SekolahInklusi extends Model
{
    use HasFactory;
    
    protected $table = 'sekolah_inklusi';

    protected $fillable = [
        'pengubah',
        'nama',
        'npsn',
        'statusSekolah',
        'alamatSekolah',
        'kota',
        'jumlahPDBK',
        'namaPembimbing',
        'jenisKelamin',
        'pangkat',
        'alamatTinggal',
        'nomorHP',
        'status',
    ];
}
