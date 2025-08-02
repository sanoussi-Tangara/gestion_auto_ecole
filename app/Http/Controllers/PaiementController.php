<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use App\Models\Eleve; // 🔥 Ajout de l'import du modèle Eleve
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function index()
    {
        $paiements = Paiement::all();
        return view('paiements.index', compact('paiements'));
    }

    public function create()
    {
        $eleves = Eleve::all(); // 🔥 On récupère tous les élèves
        return view('paiements.create', compact('eleves')); // 🔥 On passe la variable à la vue
    }

    public function store(Request $request)
    {
        $request->validate([
            'montant' => 'required|numeric|min:0',
            'date_paiement' => 'required|date',
            'eleve_id' => 'required|exists:eleves,id',
        ]);

        Paiement::create($request->all());

        return redirect()->route('paiements.index')->with('success', 'Paiement enregistré avec succès.');
    }

    public function show(Paiement $paiement)
    {
        return view('paiements.show', compact('paiement'));
    }

    public function edit(Paiement $paiement)
    {
        $eleves = Eleve::all(); // 🔥 Aussi utile si tu as une liste déroulante pour modifier l’élève
        return view('paiements.edit', compact('paiement', 'eleves'));
    }

    public function update(Request $request, Paiement $paiement)
    {
        $request->validate([
            'montant' => 'required|numeric|min:0',
            'date_paiement' => 'required|date',
            'eleve_id' => 'required|exists:eleves,id',
        ]);

        $paiement->update($request->all());

        return redirect()->route('paiements.index')->with('success', 'Paiement mis à jour avec succès.');
    }

    public function destroy(Paiement $paiement)
    {
        $paiement->delete();
        return redirect()->route('paiements.index')->with('success', 'Paiement supprimé avec succès.');
    }
}
