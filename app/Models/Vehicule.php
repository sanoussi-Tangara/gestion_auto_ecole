<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'marque',
        'modele',
        'immatriculation',
        'type',
        'annee',
        'statut',
    ];

    public function cours()
    {
        return $this->hasMany(Cours::class);
    }
}
