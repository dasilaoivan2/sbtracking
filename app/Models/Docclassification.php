<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docclassification extends Model
{
    use HasFactory;

    protected $fillable = ['incomingdocument_id','classification_id'];

    public function classification(){
        return $this->belongsTo('App\Models\Classification');
    }

    public function incomingdocument(){
        return $this->belongsTo('App\Models\Incomingdocument');
    }
}
