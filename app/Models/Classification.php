<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{

    use HasFactory;

    protected $fillable = ['name','category_id'];

    public function incomingdocuments(){

        return $this->hasMany('App\Models\Incomingdocument');

    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

}
