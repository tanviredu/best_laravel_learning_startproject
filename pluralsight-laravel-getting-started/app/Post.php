<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   

    // enter the fillable column
    protected $fillable = ['title','content'];


}
