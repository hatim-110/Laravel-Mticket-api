<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville ;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Villes = Ville::all();

       return  response()->json($Villes, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
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
    // public function show($id)
    // {
    //     $ville = Ville::findOrFail($id);
    //     $name = $ville->nom_fr;
    //     $voyages = DB::table('voyages')
    //         ->join('villes', 'villes.id', '=', 'voyages.ville_id')
    //         ->join('agences', 'agences.id', '=', 'voyages.agence_id')
    //         ->join('places', 'places.id', '=', 'voyages.places_id')
    //         ->select('voyages.titre', 'voyages.depart', 'voyages.ligne-fr', 'voyages.ligne-ar', 'voyages.active', 'villes.nom_fr', 'villes.nom_ar', 'villes.prix', 'agences.nom_fr', 'agences.nom_ar', 'agences.path')
    //         ->where('voyages.ligne-fr', 'like', '%' . $name . '%')



    //         ->get();
    //     return  response()->json($voyages, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    // }
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
