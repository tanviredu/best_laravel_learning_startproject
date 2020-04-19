<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   

    // enter the fillable column
    protected $fillable = ['title','content'];

    public function likes(){
        return $this->hasMany('App\Like');
        }

    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
