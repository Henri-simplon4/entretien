<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entretien;
use App\Models\Liste;

class ListeController extends Controller
{

    public function getList()
    {



       $entretiens = Entretien::all();




// $data = [];
//         foreach ($profils as $profil) {


// $data[$profil->name] = [
//                 'profil' => $profil,


// 'services' => $entretiens->where('profil_id', $profil->id)->pluck('service')->unique(),
//             ];
//         }

        // Passer les données à la vue
        return view('liste',[ 'entretiens'=>$entretiens]);

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
    public function destroy(Entretien $entretien)
{
    // Delete the entretien
    $entretien->delete();

    return redirect()->route('liste')->with('success', 'Entretien deleted successfully');
}


}
