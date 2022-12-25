<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use App\Models\Groupe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nom = null)
{
    $query = $nom ? Matiere::wherenom($nom)->firstOrFail()->groupes() : Groupe::query();
    $groupes = $query->oldest('nom')->paginate(20);
    $matieres =  Matiere::all();
    return view('groupe/index', compact('groupes','nom','matieres'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $matieres = Matiere::all();
        return view('groupe/create',compact('matieres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $groupe = new Groupe;
    $groupe->nom = $request->nom;
    $groupe->description = $request->description;
    $groupe->matiere_id = $request->matiere_id;
    $groupe->save();
    return redirect()->route('groupes.index')->with('info', 'Le groupe a bien été créé');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Groupe $groupe)
{   $niveau = $groupe->matiere->niveau->nom;
    $matiere = $groupe->matiere->nom;    
    return view('groupe/show', compact('groupe', 'matiere','niveau'));
}
 
    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(groupe $groupe)
    {
        $matieres = Matiere::all();
        return view('groupe/edit', compact('groupe','matieres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Groupe $groupe)
    {
        $groupe->nom = $request->nom;
        $groupe->description = $request->description;
        $groupe->matiere_id = $request->matiere_id;
        $groupe->save();
        return redirect()->route('groupes.index')->with('info', 'Le groupe a bien été modifiée !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Groupe $groupe)
{
    $groupe->delete();
    return back()->with('info', 'Le groupe a bien été supprimé dans la base de données.');
}
}
