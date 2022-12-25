<?php

namespace App\Models;

use App\Models\Groupe;
use App\Models\Matiere;
use App\Models\Paiment;
use App\Models\Etudiant;
use App\Models\Formateur;
use Illuminate\Database\Eloquent\Model;


class Niveau extends Model
{
    protected $fillable = [
        'nom','description',
    ];
    public $timestamps = true;
    public function paiments()
    {
        return $this->hasMany(Paiment::class);
    
}
public function etudiants()
{
    return $this->hasMany(Etudiant::class);

}

public function formateurs()
{
    return $this->belongsToMany(Formateur::class);
}
public function groupes()
{
    return $this->hasMany(Groupe::class);

}
public function matieres()
{
    return $this->hasMany(Matiere::class);

}


}