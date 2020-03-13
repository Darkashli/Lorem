<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name'];

    //To turn off all mass assignment protection
    // protected $guarded =[]; 
}
