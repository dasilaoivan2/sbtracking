<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['description','dateofactivity','activitytype_id','referral_id', 'subject'];

    // protected $dates = ['dateofactivity'];

    public function activitytype(){
        return $this->belongsTo('App\Models\Activitytype');
    }

    public function files(){
        return $this->hasMany('App\Models\Activityfile');
    }

    public function referral()
    {
        return $this->belongsTo('App\Models\Referral');
    }

    public function orderbusinesses()
   {
    return $this->belongsToMany('App\Models\Orderbusiness', 'orderactivities', 'activity_id', 'orderbusiness_id');
   }
}
