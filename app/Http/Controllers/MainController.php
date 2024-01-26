<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use App\Models\Categorie;
use App\Models\Plat;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home ()
    {   
        $actus= Actu::all();
        $photoAmbiance = photoAmbiance::all();

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
       return view('reservation');
    }

    public function reservationStore(Request $request)
    {

       $validated = $request->validate([
        'nom' => 'required|min:3|max:50',
        'couverts' => 'required|numeric|gte:1|lte:16',
        'heure' => 'required',
        'jour' => 'required',
        'telephone' => 'required',
        'commentaires' => '',
       ]);
       dd($validated);
    }

}
