<?php

namespace App\Http\Controllers;

use App\Models\Reservation; 
use Illuminate\Http\Request;

class AdminReservationController extends Controller

{    
     private $heures = [
        // crénaux du midi
        '12:00',
        '12:30',
        '13:00',
        '13:30',

    //crénaux du soir
        '20:00',
        '20:30',
        '21:00',
        '21:30',
    ];

    // /admin/reservation

    public function index()
    {

        $reservations = Reservation::all();

        return view('reservationIndex', [
            'reservations' => $reservations,
        ]);

    }
    public function show(int $id)
    {

        $reservation = Reservation::find($id);

        return view('reservationShow', ['reservation' => $reservation]);
    }
    public function edit(int $id)
    {   
        $reservation = Reservation::find($id);

        return view('admin.reservation.edit', [
            'reservation' => $reservation,
            'heures' => $this ->heures,
        ]);
    }



}


