<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'eleve_id',
        'montant',
        'methode',
        'date_paiement',
        'description',
    ];

    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }
}
