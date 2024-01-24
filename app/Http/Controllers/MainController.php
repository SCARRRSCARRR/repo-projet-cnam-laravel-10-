<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use App\Models\Categorie;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home ()
    {   
        $actus= Actu::all();

        return view('home', [
            'actus'=> $actus,
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
}
