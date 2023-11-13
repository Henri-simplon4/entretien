<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $fillable = ['marque', 'modele', 'annee', 'couleur', 'immatriculation'];

    // Méthode pour définir la relation avec un utilisateur, si nécessaire
    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }

    // Méthode pour définir la relation avec les entretiens, si nécessaire
    public function entretiens()
    {
        return $this->hasMany(Entretien::class);
    }

    // Méthode pour effectuer une recherche de véhicule par immatriculation
    public static function searchByImmatriculation($immatriculation)
    {
        return self::where('immatriculation', 'LIKE', "%$immatriculation%")->get();
    }
}


