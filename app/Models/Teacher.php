<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['id','first_name','last_name','image','subject_id','added_by'];

    function admin(){
        return $this->belongsTo('App\Models\Admin','added_by');
    }

    function subject(){
        return $this->belongsTo('App\Models\Subject','subject_id');
    }

    function grades(){
        return $this->hasMany('App\Grade');
    }

    function user(){
        return $this->hasMany('App\Models\User','isTeacher');
    }
}
