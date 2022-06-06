<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    public function sectionones(){
        return $this->hasMany(sectionone::class);
    }

    public function listgenre(){
        return $this->hasMany(listgenre::class);
    }
}
