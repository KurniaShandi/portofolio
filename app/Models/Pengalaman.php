<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;

    protected $table = 'pengalamans';
    protected $fillable = [
        'user_id',
        'tahun_mulai',
        'tahun_selesai',
        'pekerjaan',
        'nama_perusahaan',
        'kota',
        'keterangan',
    ];
}
