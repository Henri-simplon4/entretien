<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entretien extends Model
{
    use HasFactory;
    protected $fillable = ['service', 'pieces', 'date', 'odometer', 'next_service_odometer', 'price'];

    public function profil()
    {
        return $this->belongsTo(Profil::class);
    }
}
