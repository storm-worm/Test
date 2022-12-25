<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NiveauRequest;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveaux = Niveau::all();
        return view('niveau/index', compact('niveaux'));
        
    }
    public function voir()
    {
        $niveaux = Niveau::all();
        return view('vueniveaux', compact('niveaux'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('niveau/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NiveauRequest $request)
{
    $niveau = new Niveau;
    $niveau->nom = $request->nom;
    $niveau->description = $request->description;
    $niveau->save();
    return redirect()->route('niveaux.index')->with('info', 'Le niveau a bien été créé');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Niveau $niveau)
{
    return view('niveau/show', compact('niveau'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Niveau $niveau)
    {
        return view('niveau/edit', compact('niveau'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NiveauRequest $request, Niveau $niveau)
    {
        $niveau->nom = $request->nom;
        $niveau->description = $request->description;
        $niveau->save();
        return redirect()->route('niveaux.index')->with('info', 'Le niveau a bien été modifiée !');

    } 
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Niveau $niveau)
{
    $niveau->delete();
    return back()->with('info', 'Le niveau a bien été supprimé dans la base de données.');
}
}
