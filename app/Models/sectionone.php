<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sectionone extends Model
{
    protected $table = "sectionones";
    protected $primarykey = "id";
    protected $fillable = ['judul', 'gambar_id', 'caption'];

    public function gambar(){
        return $this->belongsTo(Gambar::class);
    }
}
