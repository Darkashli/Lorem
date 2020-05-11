<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $guarded = [];

    public function path()
    {
        return url('/participants/' . $this->id);
    }
}
