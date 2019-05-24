<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    public function minis()
    {
        return $this->hasMany('App\Mini');
    }
}
