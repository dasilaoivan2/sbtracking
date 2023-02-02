<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderbusfile extends Model
{
    use HasFactory;

    protected $fillable = ['description','orderbusiness_id','filename'];

    public function orderbusiness(){
        return $this->belongsTo('App\Models\Orderbusiness');
    }
}
