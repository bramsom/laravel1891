<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;
    public function book(){
        return $this->hasMany('App\Models\book')

    }
    public function users(){
        return $this->belongsToMany('App\Models\User')

    }

}
