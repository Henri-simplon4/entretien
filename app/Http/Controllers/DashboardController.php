<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Exemple : récupération du nombre total de véhicules
        $totalVehicles = Vehicule::count();

        // Exemple : récupération des 5 derniers entretiens à venir
        $upcomingMaintenance = Entretien::where('date', '>', now())
            ->orderBy('date')
            ->take(5)
            ->get();

        return view('dashboard.index', compact('totalVehicles', 'upcomingMaintenance'));
    }

}
