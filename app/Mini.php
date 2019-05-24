<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mini extends Model
{
    protected $fillable = [
        'name',
        'station_id',
        'cost',
        'wounds',
        'size',
        'defense',
        'defense_suit',
        'willpower',
        'willpower_suit',
        'move',
        'quantity',
        'aka',
        'description'];


    public function factions()
    {
        return $this->belongsToMany('App\Faction');
    }

    public function keywords()
    {
        return $this->belongsToMany('App\Keyword');
    }

    public function characteristics()
    {
        return $this->belongsToMany('App\Characteristic');
    }

    public function abilities()
    {
        return $this->belongsToMany('App\Abilitie');
    }

    public function stations()
    {
        return $this->belongsTo('App\Station');
    }





    


}
