<?php

namespace App\Http\Controllers;



use App\Models\Niveau;
use App\Models\Matiere;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class matiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nom = null)
{
    $query = $nom ? Niveau::wherenom($nom)->firstOrFail()->matieres() : Matiere::query();
    $matieres = $query->oldest('nom')->paginate(100);
    $niveaux =  Niveau::all();
    return view('matiere/index', compact('matieres','nom','niveaux'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $niveaux = Niveau::all();
        return view('matiere/create',compact('niveaux'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $matiere = new Matiere();
    $matiere->nom = $request->nom;
    $matiere->description = $request->description;
    $matiere->niveau_id = $request->niveau_id;
    $matiere->save();
    return redirect()->route('matieres.index')->with('info', 'Le matiere a bien été créé');
}

    /**
     * Display the specified resource. 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Matiere $matiere)
{
    $niveau = $matiere->niveau->nom;    
    return view('matiere/show', compact('matiere', 'niveau'));
}

    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Matiere $matiere)
    {
        $niveaux = Niveau::all();
        return view('matiere/edit', compact('matiere','niveaux'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matiere $matiere)
    {
        $matiere->nom = $request->nom;
        $matiere->description = $request->description;
        $matiere->niveau_id = $request->niveau_id;
        $matiere->save();
        return redirect()->route('matieres.index')->with('info', 'La matiere a bien été modifiée !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(matiere $matiere)
{
    $matiere->delete();
    return back()->with('info', 'Le matiere a bien été supprimé dans la base de données.');
}
}
