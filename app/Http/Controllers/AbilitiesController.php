<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abilitie;

class AbilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abilities = Abilitie::orderBy('name','asc')->paginate(10);
        return view('admin.abilities',compact('abilities'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_abilitie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abilitie = new Abilitie;
        $abilitie->name = $request->name;
        $abilitie->description = $request->description;
        $abilitie->save();
        return redirect('admin/abilities');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abilitie = Abilitie::query()->findorFail($id);
        return view('admin.edit_abilitie',compact('abilitie'));
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
        $abilitie = Abilitie::query()->findorFail($id);

        $abilitie->name = $request->name;
        $abilitie->description = $request->description;
        $abilitie->save();

        return redirect('admin/abilities');

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
