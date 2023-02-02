<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['lastname','firstname','middlename','ext','position','cellphone'];

    public function fullname(){
       return $this->lastname.", ".$this->firstname." ".$this->ext." ".$this->middlename;
    }


}
