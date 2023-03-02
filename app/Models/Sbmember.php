<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sbmember extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'position', 'code', 'status', 'political_year'];

    public function legislations()
    {
        return $this->hasMany('App\Models\Legislation');
    }
    
}
