<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Othermatter extends Model
{
    use HasFactory;

    protected $fillable = ['orderbusiness_id', 'description'];

    public function orderbusiness()
    {
        return $this->belongsTo('App\Models\Orderbusiness');
    }
}
