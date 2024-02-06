<?php

namespace App\Http\Controllers;

use App\Models\PhotoAmbiance;
use App\Models\Contact;
use App\Models\Actu;
use App\Models\Categorie;
use App\Models\Plat;
use App\Models\Reservation;
use Illuminate\Http\Request;


class MainController extends Controller
{
     private $heures = [
            // crénaux du midi
            '12:00:00' => '12:00',
            '12:30:00' => '12:30',
            '13:00:00' => '13:00',
            '13:30:00' => '13:30',
          
            //crénaux du soir
            '20:00:00' => '20:00',
            '20:30:00' => '20:30',
            '21:00:00' => '21:00',
            '21:30:00' => '21:30',
        ];
     
    public function home ()
    {   
        $actus = Actu::all();
        $photoAmbiance = PhotoAmbiance::all();

        return view('home', [
            'actus'=> $actus,
            'photoAmbiances' => $photoAmbiance,
        ]);
    } 

    public function menu ()
    {
        //$categories = ['Petit déjeuner','Entrées', 'Plats', 'Desserts', 'Boissons'];
        $categories = Categorie::all();

        return view('menu',[
            // variables qui peuvent être utilisées dans le tamplate//
            'categories' => $categories,
        ]);
    }

    public function plat(int $id)
    {
        $plat = Plat::find($id);

        return view('plat', [
            'plat'=> $plat,
        ]);
    }

    public function reservation()
    {
       return view ('reservation', [
        'heures' => $this->heures,
       ]);  
    }

    public function reservationStore(Request $request)
    {
        $heures =implode(',', $this->heures);

       $validated = $request->validate([
        'nom' => 'required|min:3|max:50',
        'couverts' => 'required|numeric|gte:1|lte:16',
        'heure' => "required|in:{$heures}",
        'jour' => 'required|date|date_format:Y-m-d|after_or_equal:today',
        'telephone' => 'required|min: 10|max:10',
        'commentaires' => 'nullable|min:10|max:1000',
       ]);

       $reservation = new Reservation();
       $reservation->nom = $validated['nom'];
       $reservation->couverts = $validated['couverts'];
       $reservation->heure = $validated['heure'];
       $reservation->jour = $validated['jour'];
       $reservation->telephone = $validated['telephone'];
       $reservation->commentaires = $validated ['commentaires'];

       $reservation->save();

       return view ('reservationStore',[
        'reservation' => $reservation,
       ]);
    }
    // /admin/reservation
       public function reservationIndex(){
           
       $reservations = Reservation::all();
    
        return view ('reservationIndex',[
           'reservations' => $reservations,
        ]);

     } 
        public function reservationShow(int $id){
        
         $reservation = Reservation::find($id);
        
         return view ('reservationShow',['reservation' => $reservation]);
        
    }
       public function contact ()
    {   
        $actus= Actu::all();

        return view('contact', [
            'actus'=> $actus,
        ]);
    } 
    // recup la liste des resa 
    // affiche un template 
    
    //recup la liste des résa
    // affiche un templat
}