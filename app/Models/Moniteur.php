<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moniteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'disponibilite',
    ];

    // Relation Moniteur -> User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function cours()
    {
        return $this->hasMany(Cours::class);
    }
}
