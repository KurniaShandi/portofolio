<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto',
        'nama_lengkap',
        'ig',
        'fb',
        'github',
        'user_id',
        'about',
    ];
}
