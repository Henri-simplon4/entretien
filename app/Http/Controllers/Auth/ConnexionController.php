<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Connexion;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ConnexionController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(request $request): View
    {
        $connexion = Connexion::create([
            'identifiant' => $request->identifiant,


        'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return view('espace');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'identifiant' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Connexion::class],
            'password' => ['required', 'confirmed',],
        ]);

        $connexion = Connexion::create([
            'identifiant' => $request->identifiant,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($connexion));

        Auth::connexion($connexion);

        return redirect()->route('espace')->with('success', 'Vous vous êtes inscrites avec succès');    }
}
