<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class novelmodel extends Model
{
    use HasFactory;
    //pegawais
    protected $table = "detailnovel";

    protected $fillable = [
        'judul',
        'desc_novel',
        'id',
    ];

    protected $casts = [
        'genre' => 'array'
    ];
}
