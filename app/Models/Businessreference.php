<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Businessreference extends Model
{
    use HasFactory;

    protected $fillable = ['orderbusiness_id', 'title', 'proponent', 'referencefile'];

    public function orderbusiness()
    {
        return $this->belongsTo('App\Models\Orderbusiness');
    }
}
