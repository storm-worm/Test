<?php

namespace App\Models;

use App\Models\Periode;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Historique extends Model
{
    protected $fillable = [
        'description',
        'etudiant_id',
    ];
    public $timestamps = true; 
    public function etudiant()
{
    return $this->belongsTo(Etudiant::class);
}
public function periode()
{
    return $this->belongsTo(Periode::class);
}

}