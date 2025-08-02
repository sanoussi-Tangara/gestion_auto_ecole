<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Eleve;
use App\Models\Moniteur;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function index()
    {
        return view('cours.index', ['cours' => Cours::all()]);
    }

    public function create()
    {
        $eleves = Eleve::with('user')->get();
        $moniteurs = Moniteur::with('user')->get();
        $vehicules = Vehicule::all();

        return view('cours.create', compact('eleves', 'moniteurs', 'vehicules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'type' => 'required|string',
            'trajet' => 'nullable|string',
            'eleve_id' => 'required|exists:eleves,id',
            'moniteur_id' => 'required|exists:moniteurs,id',
            'vehicule_id' => 'required|exists:vehicules,id',
        ]);

        Cours::create($request->all());
        return redirect()->route('cours.index');
    }

    public function show(Cours $cours)
    {
        return view('cours.show', compact('cours'));
    }

    public function edit(Cours $cours)
    {
        $eleves = Eleve::with('user')->get();
        $moniteurs = Moniteur::with('user')->get();
        $vehicules = Vehicule::all();

        return view('cours.edit', compact('cours', 'eleves', 'moniteurs', 'vehicules'));
    }

    public function update(Request $request, Cours $cours)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'type' => 'required|string',
            'trajet' => 'nullable|string',
            'eleve_id' => 'required|exists:eleves,id',
            'moniteur_id' => 'required|exists:moniteurs,id',
            'vehicule_id' => 'required|exists:vehicules,id',
        ]);

        $cours->update($request->all());
        return redirect()->route('cours.index');
    }

    public function destroy(Cours $cours)
    {
        $cours->delete();
        return redirect()->route('cours.index');
    }
}
