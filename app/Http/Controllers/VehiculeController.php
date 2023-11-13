<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function index()
{
    $vehicules = Vehicule::all();
    return view('vehicules.index', compact('vehicules'));
}

public function create()
{
    return view('vehicules.create');
}

public function store(Request $request)
{
    // Validez et enregistrez le nouveau véhicule dans la base de données
}

public function show($id)
{
    $vehicule = Vehicule::find($id);
    return view('vehicules.show', compact('vehicule'));
}

public function edit($id)
{
    $vehicule = Vehicule::find($id);
    return view('vehicules.edit', compact('vehicule'));
}

public function update(Request $request, $id)
{
    // Validez et mettez à jour le véhicule dans la base de données
}

public function destroy($id)
{
    // Supprimez le véhicule de la base de données
}

}
