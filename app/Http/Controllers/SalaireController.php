<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use App\Models\salaire;
use App\Models\formateur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class salaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($montant = null)
{
    $query = $montant ? formateur::wheremontant($montant)->firstOrFail()->salaires() : salaire::query();
    $salaires = $query->oldest('montant')->paginate(5);
    $formateurs =  formateur::all();
    return view('salaire/index', compact('salaires','montant','formateurs'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $formateurs = formateur::all();
        $periodes = Periode::all();
        return view('salaire/create',compact('formateurs','periodes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $salaire = new salaire;
    $salaire->montant = $request->montant;
    $salaire->type = $request->type;
    $salaire->formateur_id = $request->formateur_id;
    $salaire->periode_id = $request->periode_id;
    $salaire->save();
    return redirect()->route('salaires.index')->with('info', 'Le salaire a bien été créé');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(salaire $salaire)
{
    $formateurnom = $salaire->formateur->nom;
    $formateurprenom = $salaire->formateur->prenom;
    $periodedebut = $salaire->periode->debut;
    $periodefin = $salaire->periode->fin;    
    return view('salaire/show', compact('salaire', 'periodedebut','periodefin','formateurprenom','formateurnom'));
}
 
    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(salaire $salaire)
    {
        $formateurs = formateur::all();
        $periodes = Periode::all();
        return view('salaire/edit', compact('salaire','formateurs','periodes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, salaire $salaire)
    {
        $salaire->montant = $request->montant;
        $salaire->type = $request->type;
        $salaire->formateur_id = $request->formateur_id;
        $salaire->periode_id = $request->periode_id;
        $salaire->save();
        return redirect()->route('salaires.index')->with('info', 'Le salaire a bien été modifiée !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(salaire $salaire)
{
    $salaire->delete();
    return back()->with('info', 'Le salaire a bien été supprimé dans la base de données.');
}
}
