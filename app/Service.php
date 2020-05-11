<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['service'];

    //To turn off all mass assignment protection
    // protected $guarded =[];

    public function path()
    {
        return url('/services/' . $this->id);
    }
}
