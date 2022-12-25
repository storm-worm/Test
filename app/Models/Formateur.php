<?php

namespace App\Models;

use App\Models\Groupe;
use App\Models\Niveau;
use App\Models\Matiere;
use App\Models\Salaire;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formateur extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'gmail',
        'cin',
    ];
    public $timestamps = true;
    public function etudiants()
{
    return $this->belongsToMany(Etudiant::class);
}
public function groupes()
{
    return $this->belongsToMany(Groupe::class);
}
public function matieres()
{
    return $this->belongsToMany(Matiere::class);
}
public function niveaux()
{
    return $this->belongsToMany(Niveau::class);
}
public function salaires()
{
    return $this->hasMany(Salaire::class);
}

}
