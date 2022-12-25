<?php

namespace App\Http\Controllers;



use App\Models\Groupe;
use App\Models\Niveau;
use App\Models\formateur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class formateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nom = null)
{
    $query = $nom ? Groupe::wherenom($nom)->firstOrFail()->formateurs() : Formateur::query();
    $formateurs = $query->oldest('nom')->paginate(100);
    $groupes =  Groupe::all();
    return view('formateur/index', compact('formateurs','nom','groupes'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $groupes = Groupe::all();
        return view('formateur/create',compact('groupes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $formateur = Formateur::create($request->all());
    $formateur->groupes()->attach($request->cats);
    return redirect()->route('formateurs.index')->with('info', 'Le formateur a bien été créé');
}

    /** 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Formateur $formateur)
{
    $formateur->with('niveaux')->get();
    return view('formateur/show', compact('formateur'));
}

    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Formateur $formateur)
    {
        $groupes = Groupe::all();
        return view('formateur/edit', compact('formateur','groupes',));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formateur $formateur)
    {
        $formateur->update($request->all());
        $formateur->groupes()->sync($request->cats);
        return redirect()->route('formateurs.index')->with('info', 'Le formateur a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formateur $formateur)
{
    $formateur->delete();
    return back()->with('info', 'Le formateur a bien été supprimé dans la base de données.');
}
}
