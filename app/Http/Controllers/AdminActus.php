<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use Illuminate\Http\Request;

class AdminActus extends Controller
{
    public function index()
    {
        // récupération de la liste des réservations
        $actus = Actu::all();

        // affiche un template
        return view('admin.actus.index', [
            'actus' => $actus,
        ]);
    }

    public function show(int $id)
    {

         $actus = Actu::find($id);

        return view('admin.actus.show', [
        'actus' => $actus,
         ]);
    }

    public function edit($id)
    {
        $actus = Actu::find($id);

        return view('admin.actus.edit', [
            'actus' => $actus,
        ]);
    }

    public function update (Request $request, $id)
    {
        $actus = Actu::find($id);
        $actus->id = $validated['id'];
        $actus->contenu = $validated['contenu'];
        $actus->date_publication = $validated['date_publication'];
        $actus->created_at = $validated['created_at'];
        $actus->updated_at = $validated['updated_at'];

        $actus->save();

        return redirect()->route('admin.actus.show', [
            'id' => $actus ->id      
        ]);
    }

    public function delete($id)
    {
    $actus = Actu::find($id);
    $actus->delete();

    return redirect()->route('admin.actus.index');
    }
}
