<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['id','first_name','last_name','image'];

    function teachers(){
        return $this->hasMany('App\Models\Teacher');
    }

    function user(){
        return $this->hasMany('App\Models\User','isAdmin');
    }
}
