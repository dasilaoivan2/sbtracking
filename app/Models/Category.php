<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $fillable = ['name'];
    
    public function incomingdocuments(){
        return $this->hasMany('App\Models\Incomingdocument');
    }

    public function classifications(){
        return $this->hasMany('App\Models\Classification');
    }
}
