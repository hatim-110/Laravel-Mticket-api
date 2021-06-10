<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $Reservation = new Reservation ;
        $Reservation->voyages_id=$request['voyages_id'];
        $Reservation->users_id=$request['users_id'];
        $Reservation->date_reservation=$request['date_reservation'];
        $Reservation->nombre_passager=$request['nombre_passager'];
         $Reservation->save();

    }

}
