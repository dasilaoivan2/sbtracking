<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;

    protected $fillable = ['referraltype_id','incomingdocument_id','description'];

    public function referraltype(){
        return $this->belongsTo('App\Models\Referraltype');
    }

    public function incomingdocument(){
        return $this->belongsTo('App\Models\Incomingdocument');
    }

    public function activities(){
        return $this->hasMany('App\Models\Activity');
    }

    public function legislations(){
        return $this->hasMany('App\Models\Legislation');
    }
}
