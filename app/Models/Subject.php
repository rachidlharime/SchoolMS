<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['id','title','added_by'];

    function teachers(){
        return $this->hasMany('App\Models\Teacher');
    }
    
    function admin(){
        return $this->belongsTo('App\Models\Admin','added_by');
    }

    function grades(){
        return $this->hasMany('App\Models\Grade');
    }
}
