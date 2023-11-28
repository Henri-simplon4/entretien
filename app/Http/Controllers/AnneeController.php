<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annee;


class AnneeController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'libellee_annee' => 'required|integer',
        ]);

        // Create a new instance of Annee model and save it to the database
        Annee::create($validatedData);

        // Redirect with success message
        return redirect()->route('annee')->with('success', 'Année enregistrée avec succès');
    }
}
