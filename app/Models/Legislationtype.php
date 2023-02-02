<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legislationtype extends Model
{
    use HasFactory;

    public function legislations(){

        return $this->hasMany('App\Models\Legislation');
    }

    
}
