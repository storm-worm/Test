<?php

namespace App\Http\Controllers;



use App\Models\Groupe;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Niveau;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nom = null)
{
    $query = $nom ? Groupe::wherenom($nom)->firstOrFail()->etudiants() : Etudiant::query();
    $etudiants = $query->oldest('gmail')->paginate(100);
    $groupes =  Groupe::all();
    return view('etudiant/index', compact('etudiants','nom','groupes'));
}

public function voir($nom = null)
    {
        
        $query = $nom ? Groupe::wherenom($nom)->firstOrFail()->etudiants() : Etudiant::query();
    $etudiants = $query->oldest('gmail')->paginate(100);
    $groupes =  Groupe::all();
        return view('vueetuidiant', compact('etudiants','nom','groupes'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $groupes = Groupe::all();
        return view('etudiant/create',compact('groupes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $etudiant = Etudiant::create($request->all());
    $etudiant->groupes()->attach($request->cats);
    return redirect()->route('etudiants.index')->with('info', 'etudiant a bien été créé');
}

    /** 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
{
    $etudiant->with('groupes')->get();
    return view('etudiant/show', compact('etudiant'));
}

    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $groupes = Groupe::all();
        return view('etudiant/edit', compact('etudiant','groupes',));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update($request->all());
        $etudiant->groupes()->sync($request->cats);
        return redirect()->route('etudiants.index')->with('info', 'Le etudiant a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
{
    $etudiant->delete();
    return back()->with('info', 'Le etudiant a bien été supprimé dans la base de données.');
}
}
