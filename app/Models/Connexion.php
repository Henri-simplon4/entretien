<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connexion extends Model
{
    use HasFactory;
    protected $fillable = [
        'identifiant',
        'email',
        'password',
    ];
}
