<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'stok',
        'rak_id'
    ];

    public function rak(){
        return $this->belongsTo(Rak::class,'rak_id');
    }
}
