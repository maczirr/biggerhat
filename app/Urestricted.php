<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urestricted extends Model
{
    public function upgrades()
    {
        return $this->belongsToMany('App\Upgrade');
    }
}
