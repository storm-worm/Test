<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Paiment;
use App\Models\Periode;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class paimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index($id = null)
{
    $query = $id ? Etudiant::whereid($id)->firstOrFail()->paiments() : Paiment::query();
    $paiments = $query->oldest('id')->paginate(7);
    $etudiants =  Etudiant::all();
    $groupes =  Groupe::all();
    return view('paiment/index', compact('paiments','id','etudiants','groupes'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $etudiants = Etudiant::all();
        $groupes = Groupe::all();
        $periodes = Periode::all();
        return view('paiment/create',compact('etudiants','groupes','periodes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $paiment = new Paiment; 
    $paiment->montant = $request->montant;
    $paiment->etudiant_id = $request->etudiant_id;
    $paiment->groupe_id = $request->groupe_id;
    $paiment->periode_id = $request->periode_id;
    $paiment->save();
    return redirect()->route('paiments.index')->with('info', 'Le paiment a bien été créé');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paiment $paiment)
{
    $etudiantnom = $paiment->etudiant->nom; 
    $etudiantprenom = $paiment->etudiant->prenom;   
    return view('paiment/show', compact('paiment', 'etudiantnom','etudiantprenom'));
}
 
    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Paiment $paiment)
    {
        $etudiants = Etudiant::all();
        $groupes = Groupe::all();
        $periodes = Periode::all();
        return view('paiment/edit', compact('paiment','etudiants','groupes','periodes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paiment $paiment)
    {
        $paiment->montant = $request->montant;
        $paiment->etudiant_id = $request->etudiant_id;
        $paiment->groupe_id = $request->groupe_id;
        $paiment->save();
        return redirect()->route('paiments.index')->with('info', 'Le paiment a bien été modifiée !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paiment $paiment)
{
    $paiment->delete();
    return back()->with('info', 'Le paiment a bien été supprimé dans la base de données.');
}
}
