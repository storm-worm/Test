<?php

namespace App\Models;

use App\Models\Formateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salaire extends Model
{
    protected $fillable = [
        'montant',
        'type',
        'formateur_id',
        'periode_id',
    ];
    public $timestamps = true;

    public function formateur()
{
    return $this->belongsTo(Formateur::class);
}
public function periode()
{
    return $this->belongsTo(Periode::class);
}
}
