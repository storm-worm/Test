<?php
 
namespace App\Models;

use App\Models\Niveau;
use App\Models\Matiere;
use App\Models\Paiment;
use App\Models\Etudiant;
use App\Models\Formateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Groupe extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'matiere_id',
    ];

    public $timestamps = true;
    public function etudiants()
{
    return $this->belongsToMany(Etudiant::class);
}
public function formateurs()
{
    return $this->belongsToMany(Formateur::class);
}
public function matiere()
{
    return $this->belongsTo(Matiere::class);
}
public function niveau()
{
    return $this->belongsTo(Niveau::class);
}
public function paiments()
{
    return $this->hasMany(Paiment::class);
}
}
