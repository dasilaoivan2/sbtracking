<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderbusiness extends Model
{
    use HasFactory;

    protected $fillable = ['ordercategory_id', 'description', 'number_order_sb', 'number_order_session', 'session_date', 'invocation', 'reading'];
    // protected $dates = ['session_date'];

    public function ordercategory()
    {
        return $this->belongsTo('App\Models\Ordercategory');
    }

    // public function incomingdocument()
    // {
    //     return $this->belongsTo('App\Models\Incomingdoucment');
    // }

    public function incomingdocuments()
    {
        return $this->belongsToMany('App\Models\Incomingdocument', 'orderincdocs', 'orderbusiness_id', 'incomingdocument_id');
    }

    public function activities()
    {
        return $this->belongsToMany('App\Models\Activity', 'orderactivities', 'orderbusiness_id', 'activity_id');
    }

    public function unfinishbusinesses()
    {
        return $this->belongsToMany('App\Models\Incomingdocument', 'orderunfinbuses', 'orderbusiness_id', 'incomingdocument_id');
    }

    public function orderbusfiles()
    {
        return $this->hasMany('App\Models\Orderbusfile');
    }

    public function businessreferences()
    {
        return $this->hasMany('App\Models\Businessreference');
    }

    public function othermatters()
    {
        return $this->hasMany('App\Models\Othermatter');
    }
        
    
}
