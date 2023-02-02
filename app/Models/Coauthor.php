<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coauthor extends Model
{
    use HasFactory;

    protected $fillable = ['legislation_id','sbmember_id'];

    public function sbmember(){
        return $this->belongsTo('App\Models\Sbmember');
    }
}
