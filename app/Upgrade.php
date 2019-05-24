<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upgrade extends Model
{
    protected $fillable = [
        'name',
        'plentiful',
        'faction_id',
        ];

    public function factions()
    {
        return $this->hasOne('App\Faction');
    }

    public function uspecials()
    {
        return $this->belongsToMany('App\Uspecial');
    }

    public function urestricteds()
    {
        return $this->belongsToMany('App\Urestricted');
    }
}
