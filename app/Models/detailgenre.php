<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailgenre extends Model
{

    public function listgenre(){
        return $this->hasMany(listgenre::class);
    }
}
