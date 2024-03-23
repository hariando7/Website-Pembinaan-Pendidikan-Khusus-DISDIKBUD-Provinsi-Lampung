<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarSaranaPrasarana extends Model
{
    use HasFactory;

    protected $table = 'gambar_sarana_prasarana';
    
    protected $fillable = [
        'saranaPrasarana',
        'gambar'
    ];
}
