<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class listgenre extends Model
{
    protected $table = "listgenres";
    protected $primarykey = "id";
    protected $fillable = ['gambar_id', 'genrename', 'caption'];

    public function detailgenre(){
        return $this->belongsTo(detailgenre::class);
    }

    public function gambar(){
        return $this->belongsTo(Gambar::class);
    }
}