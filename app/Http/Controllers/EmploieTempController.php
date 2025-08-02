<?php

namespace App\Http\Controllers;

use App\Models\EmploieTemp;
use Illuminate\Http\Request;

class EmploieTempController extends Controller
{
    public function index()
    {
        return view('emploie_temps.index', ['emplois' => EmploieTemp::all()]);
    }

    public function create()
    {
        return view('emploie_temps.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'date_heure_debut' => 'required|date',
            'date_heure_fin' => 'required|date|after:date_heure_debut',
            'eleve_id' => 'required|exists:eleves,id',
            'moniteur_id' => 'required|exists:moniteurs,id',
        ]);

        EmploieTemp::create($request->all());
        return redirect()->route('emploie_temps.index');
    }

    public function show(EmploieTemp $emploieTemp)
    {
        return view('emploie_temps.show', compact('emploieTemp'));
    }

    public function edit(EmploieTemp $emploieTemp)
    {
        return view('emploie_temps.edit', compact('emploieTemp'));
    }

    public function update(Request $request, EmploieTemp $emploieTemp)
    {
        $request->validate([
            'type' => 'required',
            'date_heure_debut' => 'required|date',
            'date_heure_fin' => 'required|date|after:date_heure_debut',
        ]);

        $emploieTemp->update($request->all());
        return redirect()->route('emploie_temps.index');
    }

    public function destroy(EmploieTemp $emploieTemp)
    {
        $emploieTemp->delete();
        return redirect()->route('emploie_temps.index');
    }
}
