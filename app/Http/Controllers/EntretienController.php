<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entretien;
use App\Models\client;


class EntretienController extends Controller
{
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'service' => 'required',
            'pieces' => 'required',
            'date' => 'required|date',
            'odometer' => 'required|numeric',
            'next_service_odometer' => 'required|numeric',
            'price' => 'numeric'
        ]);
    
        if ($request->input('service') === 'Remplacement de pièces') {
            $validatedData['pieces'] = $request->input('pieces');
        } 
        // else {
        //     $validatedData['pieces'] = null;
        // }

        Entretien::create($validatedData);

        return redirect()->route('entretien.store')->with('success', 'Entretien enregistré avec succès');
    }
    

    public function down()
    {
        Schema::dropIfExists('entretiens');
    }
}

