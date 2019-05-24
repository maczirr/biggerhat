<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abilitie extends Model
{
    protected $fillable = [
        'name',
        'trigger_suit',
        'description'
    ];

    public function minis()
    {
        return $this->belongsToMany('App\Mini');
    }
}
