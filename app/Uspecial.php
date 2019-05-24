<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uspecial extends Model
{
    public function upgrades()
    {
        return $this->belongsToMany('App\Upgrade');
    }
}
