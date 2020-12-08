<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['id','student_id','subject_id','teacher_id','grade'];

    function student(){
        return $this->belongsTo('App\Models\Student','student_id');
    }

    function subject(){
        return $this->belongsTo('App\Models\Subject','subject_id');
    }
    
    function teacher(){
        return $this->belongsTo('App\Models\Teacher','teacher_id');
    }
}
