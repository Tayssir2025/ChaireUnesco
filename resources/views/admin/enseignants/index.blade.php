<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center"  style="color: #0069B4;">
            {{ __('Gestion Des Enseignants') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-4 flex items-center justify-between flex-wrap gap-4">
                {{-- Formulaire de recherche --}}
                <form method="GET" action="{{ route('admin.enseignants.index') }}" class="flex items-center gap-2">
                    {{-- Recherche par titre --}}
                    <div>
                        <label for="q" class="block text-sm font-medium text-gray-700">Rechercher :</label>
                        <input type="text" name="q" id="q" value="{{ request('q') }}"
                            placeholder="Rechercher" class="mt-1 border-gray-300 rounded-md shadow-sm">
                    </div>

                    {{-- Réinitialiser --}}
                    <div>
                        <label class="block text-sm font-medium text-transparent">Réinitialiser</label>
                        <a href="{{ route('admin.enseignants.index') }}"
                            class="bouton">
                            Réinitialiser
                        </a>
                    </div>
                </form>


                {{-- Bouton d'ajout --}}
                <a href="{{ route('admin.register.form') }}" class="bouton">
                    Ajouter un Enseignant
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prénom</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Téléphone</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($enseignants as $enseignant)
                                <tr>
                                    <td class="px-6 py-4 ">{{ $enseignant->nom }}</td>
                                    <td class="px-6 py-4 ">{{ $enseignant->prenom }}</td>
                                    <td class="px-6 py-4 ">{{ $enseignant->email }}</td>
                                    <td class="px-6 py-4 ">{{ $enseignant->phone }}</td>
                                    <td class="px-6 py-4 ">
                                        <div class="flex space -x-2">
                                            <form action="{{ route('admin.enseignants.destroy', $enseignant->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet enseignant ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Supprimer</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if($enseignants->isEmpty())
                        <p class="mt-4 text-gray-500">Aucun enseignant enregistré.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
