<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profil;
use App\Models\User; // Adjust the namespace as needed

class ProfileController extends Controller
{

    public function store(Request $request)
    {


    // Create a new instance of YourModel and set its attributes
    $validatedData = $request->validate([


                'name' => 'required|string',
                'vehicle_make' => 'required|string',
                'vehicle_model' => 'required|string',
                'vehicle_year' => 'required|integer',
                'vehicle_vin' => 'required|string',
            ]);


           Profil::create($validatedData);
    // Save the model to the database


    return redirect()->route('espaceclient')->with('success', 'Profil enregistré avec succès');
}


public function edit()
{
    $user = auth()->user(); // Get the currently authenticated user
    return view('profile.edit', compact('user'));
}

public function update(Request $request)
{
    $user = auth()->user(); // Get the currently authenticated user

     $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        // Add other profile fields here
    ]);


        //
    $request->user()->save();

    return redirect()->route('accueil',compact(' $user'))->with('success', 'Profile updated successfully');
}

}
