<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['id','first_name','last_name','birthday','image','added_by'];

    function grades(){
        return $this->hasMany('App\Grade');
    }
    
    function admin(){
        return $this->belongsTo('App\Models\Admin','added_by');
    }

    function user(){
        return $this->hasMany('App\Models\User','isStudent');
    }
}
