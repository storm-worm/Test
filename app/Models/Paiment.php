<?php

namespace App\Models; 

use App\Models\Groupe;
use App\Models\Periode;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiment extends Model
{
    protected $fillable = [
        'montant',
        'etudiant_id',
        'groupe_id',
        'periode_id',
    ];
    public $timestamps = true;
    public function etudiant()
{
    return $this->belongsTo(Etudiant::class);
}
public function groupe()
{
    return $this->belongsTo(Groupe::class);
}
public function periode()
{
    return $this->belongsTo(Periode::class);
}
}
