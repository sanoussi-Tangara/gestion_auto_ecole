<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\User; // <-- N'oublie pas d'importer le modèle User
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index()
    {
        return view('eleves.index', ['eleves' => Eleve::all()]);
    }

    public function create()
    {
        $users = User::all();  // Récupérer tous les utilisateurs
        return view('eleves.create', compact('users')); // Passer $users à la vue
    }

    public function store(Request $request)
    {
        $request->validate([
            'niveau' => 'required',
            'progression' => 'required',
            'date_inscription' => 'required|date',
            'user_id' => 'required|exists:users,id',
        ]);

        Eleve::create($request->all());
        return redirect()->route('eleves.index');
    }

    public function show(Eleve $eleve)
    {
        return view('eleves.show', compact('eleve'));
    }

    public function edit(Eleve $eleve)
    {
        $users = User::all(); // Si dans la vue edit tu veux aussi afficher les utilisateurs
        return view('eleves.edit', compact('eleve', 'users'));
    }

    public function update(Request $request, Eleve $eleve)
    {
        $request->validate([
            'niveau' => 'required',
            'progression' => 'required',
            'date_inscription' => 'required|date',
            'user_id' => 'required|exists:users,id',
        ]);

        $eleve->update($request->all());
        return redirect()->route('eleves.index');
    }

    public function destroy(Eleve $eleve)
    {
        $eleve->delete();
        return redirect()->route('eleves.index');
    }
}
