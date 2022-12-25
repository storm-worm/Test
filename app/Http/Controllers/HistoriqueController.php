<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Historique;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($description = null)
{
    $query = $description ? Etudiant::wherenom($description)->firstOrFail()->historiques() : Historique::query();
    $historiques = $query->oldest('description')->paginate(5);
    $etudiants =  Etudiant::all();
    return view('historique/index', compact('historiques','description','etudiants'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $etudiants = Etudiant::all();
        return view('historique/create',compact('etudiants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $historique = new Historique;
    $historique->description = $request->description;
    $historique->etudiant_id = $request->etudiant_id;
    $historique->save();
    return redirect()->route('historiques.index')->with('info', 'Le historique a bien été créé');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Historique $historique)
{
    $etudiantnom = $historique->etudiant->nom; 
    $etudiantprenom = $historique->etudiant->prenom;   
    return view('historique/show', compact('historique', 'etudiantnom','etudiantprenom'));
}
 
    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Historique $historique)
    {
        $etudiants = Etudiant::all();
        return view('historique/edit', compact('historique','etudiants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historique $historique)
    {
        $historique->description = $request->description;
        $historique->etudiant_id = $request->etudiant_id;
        $historique->save();
        return redirect()->route('historiques.index')->with('info', 'Le historique a bien été modifiée !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historique $historique)
{
    $historique->delete();
    return back()->with('info', 'Le historique a bien été supprimé dans la base de données.');
}
}
