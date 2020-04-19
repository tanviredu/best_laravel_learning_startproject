<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    public function post(){
        return $this->belongsTo('App\Post');
    }
    // now make a foreign key in the likes migration

}
