<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legislation extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','legislationtype_id','referral_id', 'dateenacted', 'referencenumber'];

    public function legislationtype(){
        return $this->belongsTo('App\Models\Legislationtype');
    }

    public function referral(){
        return $this->belongsTo('App\Models\Referral');
    }

    public function authors(){
        return $this->hasMany('App\Models\Author');
    }

    public function coauthors(){
        return $this->hasMany('App\Models\Coauthor');
    }

    public function legislationfiles(){
        return $this->hasMany('App\Models\Legislationfile');
    }
}
