<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderincdoc extends Model
{
    use HasFactory;

    protected $fillable = ['incomingdocument_id', 'orderbusiness_id'];

    public function incomingdocument()
    {
        return $this->belongsTo('App\Models\Incomingdocument');
    }

    public function orderbusiness()
    {
        return $this->belongsTo('App\Models\Orderbusiness');
    }
}
