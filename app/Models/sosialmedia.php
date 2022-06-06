<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sosialmedia extends Model
{
    protected $table = "sosialmedia";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'medialink'
    ];
}
