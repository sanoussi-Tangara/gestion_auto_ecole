@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-blue-50 via-white to-blue-100 py-12 px-6">
    <div class="max-w-6xl mx-auto bg-white rounded-3xl shadow-2xl p-10 border border-blue-100">
        <h1 class="text-4xl font-extrabold mb-10 text-center text-blue-700 flex items-center justify-center gap-3">
            <i class="fas fa-car text-blue-600 text-4xl"></i>
            Liste des véhicules
        </h1>

        <div class="mb-8 text-center">
            <a href="{{ route('vehicules.create') }}"
                class="inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-full shadow-md hover:bg-blue-700 transition">
                <i class="fas fa-plus-circle"></i>
                Ajouter un véhicule
            </a>
        </div>

        <div class="overflow-x-auto rounded-lg shadow-inner">
            <table class="min-w-full table-auto border border-blue-200 bg-white">
                <thead class="bg-blue-100 text-blue-900 text-sm uppercase tracking-wide">
                    <tr>
                        <th class="px-4 py-3 border border-blue-200 text-left">Marque</th>
                        <th class="px-4 py-3 border border-blue-200 text-left">Modèle</th>
                        <th class="px-4 py-3 border border-blue-200 text-left">Immatriculation</th>
                        <th class="px-4 py-3 border border-blue-200 text-left">Type</th>
                        <th class="px-4 py-3 border border-blue-200 text-left">Année</th>
                        <th class="px-4 py-3 border border-blue-200 text-left">Statut</th>
                        <th class="px-4 py-3 border border-blue-200 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($vehicules as $vehicule)
                    <tr class="hover:bg-blue-50 transition duration-150 ease-in-out">
                        <td class="px-4 py-3 border border-blue-100">{{ $vehicule->marque }}</td>
                        <td class="px-4 py-3 border border-blue-100">{{ $vehicule->modele }}</td>
                        <td class="px-4 py-3 border border-blue-100">{{ $vehicule->immatriculation }}</td>
                        <td class="px-4 py-3 border border-blue-100">{{ $vehicule->type }}</td>
                        <td class="px-4 py-3 border border-blue-100">{{ $vehicule->annee }}</td>
                        <td class="px-4 py-3 border border-blue-100">
                            <span class="inline-block px-3 py-1 rounded-full text-sm font-semibold 
                                {{ $vehicule->statut == 'Actif' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $vehicule->statut }}
                            </span>
                        </td>
                        <td class="px-4 py-3 border border-blue-100 text-center space-x-2">
                            <a href="{{ route('vehicules.show', $vehicule->id) }}"
                                class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-800 text-sm">
                                <i class="fas fa-eye"></i> Voir
                            </a>
                            <a href="{{ route('vehicules.edit', $vehicule->id) }}"
                                class="inline-flex items-center gap-1 text-green-600 hover:text-green-800 text-sm">
                                <i class="fas fa-edit"></i> Modifier
                            </a>
                            <form action="{{ route('vehicules.destroy', $vehicule->id) }}" method="POST"
                                class="inline-block"
                                onsubmit="return confirm('Voulez-vous vraiment supprimer ce véhicule ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-flex items-center gap-1 text-red-600 hover:text-red-800 text-sm">
                                    <i class="fas fa-trash-alt"></i> Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection