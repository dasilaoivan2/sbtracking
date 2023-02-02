<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activityfile extends Model
{
    use HasFactory;

    protected $fillable = ['description','activity_id','filename'];

    public function activity(){
        return $this->belongsTo('App\Models\Activity');
    }
    
}
