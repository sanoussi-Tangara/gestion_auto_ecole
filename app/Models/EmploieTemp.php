<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploieTemp extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'date_heure_debut',
        'date_heure_fin',
        'eleve_id',
        'moniteur_id',
    ];

    // Relations
    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }

    public function moniteur()
    {
        return $this->belongsTo(Moniteur::class);
    }
}
