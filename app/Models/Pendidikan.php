<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'tahun_mulai',
        'tahun_selesai',
        'institusi',
        'jurusan',
        'kota',
        'keterangan',
    ];
}
