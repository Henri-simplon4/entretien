<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Entretien extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'profil_id',
        'service',
        'pieces',
        'date',
        'odometer',
        'next_service_odometer',
        'price',
    ];

    // Define the relationship with Profil
    public function profil()
    {
        return $this->belongsTo(Profil::class);
    }
}
?>
