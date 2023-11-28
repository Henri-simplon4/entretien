<?php

// Profil model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Profil extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'entretien_id',
        'vehicle_make',
        'vehicle_model',
        'vehicle_year',
        'vehicle_vin',
    ];


}

