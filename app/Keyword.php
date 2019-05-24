<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    public function minis()
    {
        return $this->belongsToMany('App\Mini');
    }
}
