<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use App\Models\Cours; // 🔥 N'oublie pas d'importer le modèle Cours
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    public function index()
    {
        return view('examens.index', ['examens' => Examen::all()]);
    }

    public function create()
    {
        $cours = Cours::all(); // 🔥 Récupère tous les cours
        return view('examens.create', compact('cours')); // 🔥 Passe les cours à la vue
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'option' => 'required|string',
            'bonne_reponse' => 'required|string',
            'cours_id' => 'required|exists:cours,id',
        ]);

        Examen::create($request->all());
        return redirect()->route('examens.index');
    }

    public function show(Examen $examen)
    {
        return view('examens.show', compact('examen'));
    }

    public function edit(Examen $examen)
    {
        $cours = Cours::all(); // 🔥 Récupère tous les cours pour la sélection dans l'édition
        return view('examens.edit', compact('examen', 'cours')); // 🔥 Passe aussi $cours à la vue
    }

    public function update(Request $request, Examen $examen)
    {
        $request->validate([
            'question' => 'required|string',
            'option' => 'required|string',
            'bonne_reponse' => 'required|string',
            'cours_id' => 'required|exists:cours,id',
        ]);

        $examen->update($request->all());
        return redirect()->route('examens.index');
    }

    public function destroy(Examen $examen)
    {
        $examen->delete();
        return redirect()->route('examens.index');
    }
}
