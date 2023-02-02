<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legislationfile extends Model
{
    use HasFactory;

    protected $fillable = ['legislation_id', 'filename'];

    public function legislation(){
        return $this->belongsTo('App\Models\Legislation');
    }
}
