<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liste;
use App\Models\Entretien;
use App\Models\Profil;

class ListeController extends Controller
{

    public function getList()
    {
        // Récupérer tous les attributs de la table 'profils' sauf l'ID
        $profils = Profil::select('name', 'vehicle_make', 'vehicle_model', 'vehicle_year', 'vehicle_vin')->get();

        // Récupérer le champ 'service' de la table 'entretiens'
        $services = Entretien::select('service')->get();

        return view('liste', compact('profils', 'services'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
