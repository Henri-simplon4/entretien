<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entretien;
use App\Models\Profil;
use Illuminate\Support\Facades\Validator;

class EntretienController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|exists:profils,name|unique:entretiens,profil_id',
            'service' => 'required',
            'pieces' => 'required',
            'date' => 'required|date_format:Y-m-d',
            'odometer' => 'required|integer',
            'next_service_odometer' => 'required|integer',
            'price' => 'numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->route('entretien.store')->with('error', 'Nom incorrect ou données manquantes');
        }

        $profileId = Profil::where('name', $request->input('name'))->value('id');

        $entretien = new Entretien([
            'profil_id' => $profileId,
            'service' => $request->input('service'),
            'pieces' => $request->input('pieces'),
            'date' => $request->input('date'),
            'odometer' => $request->input('odometer'),
            'next_service_odometer' => $request->input('next_service_odometer'),
            'price' => $request->input('price'),
        ]);

        $entretien->save();

        return redirect()->route('entretien.store')->with('success', 'Entretien enregistré avec succès');
    }

    public function index()
    {
        $entretiens = Entretien::all();

        return view('entretiens.index', compact('entretiens'));
    }
}
