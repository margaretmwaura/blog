<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//We dont need a method here since all the methods that we need are in the model
//For example 
//post::all()
//Double colons normally mean it is a constant or static or extended function
class Post extends Model
{
    //table name
    protected $table = 'posts';

    public $primaryKey = 'id';

    //This specifies that the timepstamps are wanted
    public $timestamps = true ;
}
