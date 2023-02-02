<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incdocfile extends Model
{
    use HasFactory;

    protected $fillable = ['filename','incomingdocument_id'];

    public function incomingdocument(){
        return $this->belongsTo('App\Models\Incomingdocument');
    }

}
