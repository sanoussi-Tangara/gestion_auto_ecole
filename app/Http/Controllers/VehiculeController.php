<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function index()
    {
        return view('vehicules.index', ['vehicules' => Vehicule::all()]);
    }

    public function create()
    {
        return view('vehicules.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marque' => 'required|string|max:255',
            'modele' => 'required|string|max:255',
            'immatriculation' => 'required|string|max:20|unique:vehicules',
            'type' => 'required|string',
            'annee' => 'required|integer|min:1900|max:' . date('Y'),
            'statut' => 'required|string',
        ]);

        Vehicule::create($request->all());
        return redirect()->route('vehicules.index');
    }

    public function show(Vehicule $vehicule)
    {
        return view('vehicules.show', compact('vehicule'));
    }

    public function edit(Vehicule $vehicule)
    {
        return view('vehicules.edit', compact('vehicule'));
    }

    public function update(Request $request, Vehicule $vehicule)
    {
        $request->validate([
            'marque' => 'required|string|max:255',
            'modele' => 'required|string|max:255',
            'immatriculation' => 'required|string|max:20|unique:vehicules,immatriculation,' . $vehicule->id,
            'type' => 'required|string',
            'annee' => 'required|integer|min:1900|max:' . date('Y'),
            'statut' => 'required|string',
        ]);

        $vehicule->update($request->all());
        return redirect()->route('vehicules.index');
    }

    public function destroy(Vehicule $vehicule)
    {
        $vehicule->delete();
        return redirect()->route('vehicules.index');
    }
}
