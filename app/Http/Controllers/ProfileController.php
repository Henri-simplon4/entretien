<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Profil;

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
     

    return redirect()->route('profil.store')->with('success', 'Profil enregistré avec succès');
}  

public function edit()
{
    $user = auth()->user(); // Get the currently authenticated user
    return view('profile.edit', compact('user'));
}

public function update(Request $request)
{
    $user = auth()->user(); // Get the currently authenticated user

    $validatedData = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        // Add other profile fields here
    ]);

    
        //
$user->update($validatedData);

    return redirect()->route('profile.edit')->with('success', 'Profile updated successfully');
}

}