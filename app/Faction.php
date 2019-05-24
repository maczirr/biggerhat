<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faction extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'color'
    ];

    public function minis()
    {
        return $this->belongsToMany('App\Mini');
    }

    public function upgrades()
    {
        return $this->belongsToMany('App\Upgrade');
    }
}
