<?php

namespace App\Http\Controllers;

use App\Models\Moniteur;
use App\Models\User;

use Illuminate\Http\Request;

class MoniteurController extends Controller
{
    public function index()
    {
        return view('moniteurs.index', ['moniteurs' => Moniteur::all()]);
    }

    public function create()
    {
        $users = User::all();  // Récupérer tous les utilisateurs
        return view('moniteurs.create', compact('users')); // Passer $users à la vue
    }

    public function store(Request $request)
    {
        $request->validate([
            'disponibilite' => 'required|boolean',
            'user_id' => 'required|exists:users,id',
        ]);

        Moniteur::create($request->all());
        return redirect()->route('moniteurs.index');
    }

    public function show(Moniteur $moniteur)
    {
        return view('moniteurs.show', compact('moniteur'));
    }

    public function edit(Moniteur $moniteur)
    {
        return view('moniteurs.edit', compact('moniteur'));
    }

    public function update(Request $request, Moniteur $moniteur)
    {
        $request->validate([
            'disponibilite' => 'required|boolean',
        ]);

        $moniteur->update($request->all());
        return redirect()->route('moniteurs.index');
    }

    public function destroy(Moniteur $moniteur)
    {
        $moniteur->delete();
        return redirect()->route('moniteurs.index');
    }
}
