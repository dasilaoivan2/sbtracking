<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordercategory extends Model
{
    use HasFactory;

    public function orderbusinesses()
    {
        return $this->hasMany('App\Models\Orderbusiness');
    }

    
}
