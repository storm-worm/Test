<?php

namespace App\Models;

use App\Models\Paiment;
use App\Models\Salaire;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $fillable = [
        'debut',
        'fin',
    ];
    public $timestamps = true;
    public function paiments()
{
    return $this->hasMany(Paiment::class);
}
public function salaires()
{
    return $this->hasMany(Salaire::class);
}
}
