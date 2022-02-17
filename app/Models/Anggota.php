<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $fillable =[
        'nis',
        'name',
        'kelas',
        'jurusan',
        'no_telp',
        'alamat',
        'kehadiran'
    ];
}
