<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelveh;

class ModelController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'libellee_models' => 'required|string',
        ]);


        Modelveh::create($validatedData);

        // Redirect with success message
        return redirect()->route('model')->with('success', 'Le model a été bien enregistrée');
    }
}
