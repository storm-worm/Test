<?php

namespace App\Models;

use App\Models\Groupe;
use App\Models\Niveau;
use App\Models\Paiment;
use App\Models\Etudiant;
use App\Models\Formateur;
use Illuminate\Database\Eloquent\Model;


class Matiere extends Model
{
    protected $fillable = [
        'nom','description',
    ];
    public $timestamps = true;
    public function niveau()
{
    return $this->belongsTo(Niveau::class);
}

public function groupes()
{
    return $this->hasMany(Groupe::class);
}
public function etudiants()
{
    return $this->belongsToMany(Etudiant::class);
}
public function formateurs()
{
    return $this->belongsToMany(Formateur::class);
}
public function paiments()
{
    return $this->hasMany(Paiment::class);
}
}