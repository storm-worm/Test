<?php

namespace App\Http\Controllers;

use App\Models\periode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class periodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodes = periode::all();
        return view('periode/index', compact('periodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periode/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $periode = new periode;
    $periode->debut = $request->debut;
    $periode->fin = $request->fin;
    $periode->save();
    return redirect()->route('periodes.index')->with('info', 'Le periode a bien été créé');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(periode $periode)
{
    return view('periode/show', compact('periode'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(periode $periode)
    {
        return view('periode/edit', compact('periode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, periode $periode)
    {
        $periode->debut = $request->debut;
        $periode->fin = $request->fin;
        $periode->save();
        return redirect()->route('periodes.index')->with('info', 'Le periode a bien été modifiée !');

    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(periode $periode)
{
    $periode->delete();
    return back()->with('info', 'Le periode a bien été supprimé dans la base de données.');
}
}
