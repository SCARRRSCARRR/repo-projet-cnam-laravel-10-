<?php

namespace App\Http\Controllers;

use App\Models\PhotoAmbiance;
use Illuminate\Http\Request;

class AdminPhotosAmbiances extends Controller
{
    public function index()
    {
        $photosambiances = PhotoAmbiance::all();

        return view('admin.photos_ambiances.index', [
            'photosambiances' => $photosambiances,
        ]);
    }

    public function show(int $id)
    {

        $photosambiances = PhotoAmbiance::find($id);

        return view('admin.photos_ambiances.show', [
        'photosambiances' => $photosambiances,
        ]);
    }

    public function edit($id)
    {
        $photosambiances = PhotoAmbiance::find($id);

        return view('admin.photos_ambiances.edit', [
            'photosambiances' => $photosambiances,
        ]);
    }

    public function update (Request $request, $id)
    {
        $photosambiances = PhotoAmbiance::find($id);
        $photosambiances->id = $validated['id'];
        $photosambiances->fichier = $validated['fichier'];
        $photosambiances->description = $validated['description'];
        $photosambiances->created_at = $validated['created_at'];
        $photosambiances->updated_at = $validated ['updated_at'];

        $photosambiances->save();

        return redirect()->route('admin.photos_ambiances.show', [
            'id' => $photosambiances ->id      
        ]);
    }

    public function delete($id)
    {
    $photosambiances = PhotoAmbiance::find($id);
    $photosambiances->delete();

    return redirect()->route('admin.photos_ambiances.index');
    }
}
