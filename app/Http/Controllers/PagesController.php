<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Faction;
use App\Mini;
use App\Station;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('welcome');
    }

    public function getFactions()
    {
        $factions = Faction::orderBy('name','ASC')->get();

        return view('factions',compact('factions'));
    }

    public function viewFaction($id)
    {
        $stations = Station::orderBy('id','ASC')->get();
        $this_faction = Faction::findorFail($id);
        $minis = Mini::whereHas('factions', function($query) use ($id) {
            $query->where('faction_id','=',$id);
        })->with('keywords')->with('abilities')->with('characteristics')->orderBy('name','ASC')->get();
        return view('faction_view',compact('minis','this_faction','stations'));
    }

    public function viewMini($id)
    {
        $mini = Mini::with('keywords')->with('abilities')->with('characteristics')->with('factions')->findorFail($id);

        return view('mini_view',compact('mini'));
    }
}
