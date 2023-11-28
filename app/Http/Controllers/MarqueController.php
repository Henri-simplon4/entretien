<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marque;

class MarqueController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'libellee_marque' => 'required|string',
        ]);

        // Create a new instance of Annee model and save it to the database
        Marque::create($validatedData);

        // Redirect with success message
        return redirect()->route('marque')->with('success', 'La marque a été bien enregistrée');
    }
}
