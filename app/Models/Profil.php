<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'vehicle_make', 'vehicle_model', 'vehicle_year', 'vehicle_vin'];

    public function entretiens()
    {
        return $this->hasMany(Entretien::class);
    }
}
