<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Incomingdocument extends Model
{
    use HasFactory;

    protected $fillable = ['type_id','description','category_id'];



   public function category(){

    return $this->belongsTo('App\Models\Category');

   }

   public function type(){

    return $this->belongsTo('App\Models\Type');

   }

   public function docclassifications(){
    return $this->hasMany('App\Models\Docclassification');
   }

   public function files (){
    return $this->hasMany('App\Models\Incdocfile');
   }

   public function referrals (){
    return $this->hasMany('App\Models\Referral');
   }

   public function orderbusinesses()
   {
    return $this->belongsToMany('App\Models\Orderbusiness', 'orderincdocs', 'incomingdocument_id', 'orderbusiness_id');
   }

   public function orderunfinbusinesses()
   {
    return $this->belongsToMany('App\Models\Orderbusiness', 'orderunfinbuses', 'incomingdocument_id', 'orderbusiness_id');
   }
   
}

