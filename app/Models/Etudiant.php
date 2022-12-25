<?php

namespace App\Models;

use App\Models\Groupe;
use App\Models\Niveau;
use App\Models\Matiere;
use App\Models\Paiment;
use App\Models\Formateur;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'gmail',
        'groupe_id',
    ];
    public $timestamps = true;
    public function formateurs()
{
    return $this->belongsToMany(Formateur::class);
}
public function groupes()
{
    return $this->belongsToMany(Groupe::class);
}
public function matieres()
{
    return $this->belongsToMany(Matiere::class);
}
public function niveau()
{
    return $this->belongsTo(Niveau::class);
}
public function paiments()
{
    return $this->hasMany(Paiment::class);
}
public function historiques()
{
    return $this->belongto(historique::class);
}

}
