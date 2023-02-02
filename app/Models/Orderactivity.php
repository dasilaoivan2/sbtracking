<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderactivity extends Model
{
    use HasFactory;

    protected $fillable = ['activity_id', 'orderbusiness_id'];

    public function activity()
    {
        return $this->belongsTo('App\Models\Activity');
    }

    public function orderbusiness()
    {
        return $this->belongsTo('App\Models\Orderbusiness');
    }
}
