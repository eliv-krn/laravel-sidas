<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidas extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'nama',
        'nisn',
        'tempat_lahir',
        'tgl_lahir',
        'ayah',
        'ibu',
        'alamat'
    ];
}
