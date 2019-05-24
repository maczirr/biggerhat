<?php

namespace App\Http\Controllers;

use App\Characteristic;
use App\Faction;
use App\Keyword;
use App\Station;
use App\Mini;
use App\Abilitie;
use Illuminate\Http\Request;

class MinisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minis = Mini::orderBy('name','ASC')->paginate(10);
        return view('admin.minis',compact('minis'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abilities = Abilitie::orderBy('name','asc')->pluck('name','id');
        $characteristics = Characteristic::orderBy('name','asc')->pluck('name','id');
        $factions = Faction::orderBy('name','asc')->pluck('name','id');
        $keywords = Keyword::orderBy('name','asc')->pluck('name','id');
        $stations = Station::pluck('name','id');
        return view('admin.add_mini',compact('characteristics','keywords','factions','stations','abilities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mini = new Mini;
        $mini->name = $request->name;
        $mini->station_id = $request->station_id;
        $mini->cost = $request->cost;
        $mini->wounds = $request->wounds;
        $mini->size = $request->size;
        $mini->base = $request->base;
        $mini->defense = $request->defense;
        $mini->defense_suit = $request->defense_suit;
        $mini->willpower = $request->willpower;
        $mini->willpower_suit = $request->willpower_suit;
        $mini->move = $request->move;
        $mini->quantity = $request->quantity;
        $mini->aka = $request->aka;
        $mini->description = $request->description;
        $mini->save();
        $mini->abilities()->sync($request->abilities);
        $mini->factions()->sync($request->factions);
        $mini->keywords()->sync($request->keywords);
        $mini->characteristics()->sync($request->characteristics);

        return redirect('admin/minis');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query = Mini::findorFail($id)->keywords()->orderBy('name')->get();
        return $query;
        foreach ($query->factions as $faction) {
            echo $faction->name;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abilities = Abilitie::orderBy('name','asc')->pluck('name','id');
        $characteristics = Characteristic::orderBy('name','asc')->pluck('name','id');
        $factions = Faction::orderBy('name','asc')->pluck('name','id');
        $keywords = Keyword::orderBy('name','asc')->pluck('name','id');
        $stations = Station::pluck('name','id');
        $mini = Mini::query()->findorFail($id);
        return view('admin.edit_mini',compact('mini','characteristics','factions','keywords','stations','abilities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mini = Mini::query()->findorFail($id);
        $mini->name = $request->name;
        $mini->station_id = $request->station_id;
        $mini->cost = $request->cost;
        $mini->wounds = $request->wounds;
        $mini->size = $request->size;
        $mini->base = $request->base;
        $mini->defense = $request->defense;
        $mini->defense_suit = $request->defense_suit;
        $mini->willpower = $request->willpower;
        $mini->willpower_suit = $request->willpower_suit;
        $mini->move = $request->move;
        $mini->quantity = $request->quantity;
        $mini->aka = $request->aka;
        $mini->description = $request->description;
        $mini->save();
        $mini->abilities()->sync($request->abilities);
        $mini->factions()->sync($request->factions);
        $mini->keywords()->sync($request->keywords);
        $mini->characteristics()->sync($request->characteristics);

        return redirect('admin/minis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
