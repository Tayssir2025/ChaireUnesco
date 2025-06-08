<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center" style="color: #0069B4;">
            {{ __('Gestion Des Projets') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Header section --}}
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-medium">Liste des Projets</h3>
                <a href="{{ route('projets.create') }}" class="bouton">
                    Ajouter un Projet
                </a>
            </div>

            <form method="GET" action="{{ route('projets.index') }}" class="mb-6 flex flex-wrap items-end gap-4">
                {{-- Filtre Statut --}}
                <div>
                    <label for="statut" class="block text-sm font-medium text-gray-700">Filtrer par statut :</label>
                    <select name="statut" id="statut" onchange="this.form.submit()"
                        class="mt-1 border-gray-300 rounded-md shadow-sm"
                        @if (request('q')) disabled @endif>
                        <option value="">Tous</option>
                        <option value="en attente" {{ request('statut') == 'en attente' ? 'selected' : '' }}>En attente
                        </option>
                        <option value="approuve" {{ request('statut') == 'approuve' ? 'selected' : '' }}>Approuvé
                        </option>
                        <option value="annule" {{ request('statut') == 'annule' ? 'selected' : '' }}>Annulé</option>
                    </select>
                </div>

                {{-- Recherche par nom --}}
                <div>
                    <label for="q" class="block text-sm font-medium text-gray-700">Rechercher par utilisateur
                        :</label>
                    <input type="text" name="q" id="q" value="{{ request('q') }}"
                        placeholder="Nom de l'utilisateur" class="mt-1 border-gray-300 rounded-md shadow-sm"
                        @if (request('statut')) disabled @endif>
                </div>

                {{-- Bouton Réinitialiser --}}
                <div>
                    <label class="block text-sm font-medium text-transparent">Réinitialiser</label>
                    <a href="{{ route('projets.index') }}"
                        class="bouton">
                        Réinitialiser
                    </a>
                </div>
            </form>


            {{-- Project cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($projects as $project)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                        <div class="p-6">
                            <div class="flex justify-between items-start">
                                <h3 class="text-lg font-medium text-gray-900 mb-2">{{ $project->titre }}</h3>
                                <span
                                    class="px-2 py-1 text-xs rounded-full
                                    @if ($project->statut == 'approuve') bg-green-100 text-green-800
                                    @elseif($project->statut == 'annule') bg-red-100 text-red-800
                                    @else bg-yellow-100 text-yellow-800 @endif">
                                    {{ ucfirst($project->statut) }}
                                </span>
                            </div>

                            <p class="text-sm text-gray-500 mb-2">
                                <span class="font-medium">Par:</span> {{ $project->user->nom }}
                            </p>

                            <p class="text-sm text-gray-500 mb-2">
                                <span class="font-medium">Date:</span>
                                {{ \Carbon\Carbon::parse($project->datedebut)->format('d/m/Y') }} -
                                {{ \Carbon\Carbon::parse($project->datefin)->format('d/m/Y') }}
                            </p>

                            {{-- Infos dynamiques sur les dates --}}
                            <p class="text-xs text-gray-400 italic mb-1">
                                @if (\Carbon\Carbon::parse($project->datedebut)->isFuture())
                                    📅 Commence dans
                                    {{ \Carbon\Carbon::parse($project->datedebut)->diffForHumans(null, true) }}
                                @else
                                    ✅ Commencé {{ \Carbon\Carbon::parse($project->datedebut)->diffForHumans() }}
                                @endif
                            </p>

                            <p class="text-xs text-gray-400 italic mb-4">
                                @if (\Carbon\Carbon::parse($project->datefin)->isPast())
                                    ⏳ Terminé {{ \Carbon\Carbon::parse($project->datefin)->diffForHumans() }}
                                @else
                                    ⌛ Finit dans
                                    {{ \Carbon\Carbon::parse($project->datefin)->diffForHumans(null, true) }}
                                @endif
                            </p>

                            <p class="text-xs text-gray-500 mb-1">
                                🕒 <span class="font-medium">Créé le :</span>
                                {{ $project->created_at->format('d/m/Y à H:i') }}
                            </p>

                            <p class="text-xs text-gray-500 mb-4">
                                🔄 <span class="font-medium">Mis à jour le :</span>
                                {{ $project->updated_at->format('d/m/Y à H:i') }}
                            </p>

                            <p class="text-sm text-gray-600 mb-4 line-clamp-3">{{ $project->description }}</p>

                            {{-- Actions --}}
                            <div class="flex justify-between items-center">
                                <a href="{{ route('projets.edit', $project) }}"
                                    class="text-blue-500 hover:text-blue-700 text-sm font-medium">
                                    Modifier
                                </a>

                                <form action="{{ route('projets.destroy', $project) }}" method="POST"
                                    onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline text-sm font-medium">
                                        Supprimer
                                    </button>
                                </form>

                                @if (auth()->user()?->role === 'admin')
                                    <form action="{{ route('projets.updateStatus', $project) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <select name="statut" onchange="this.form.submit()"
                                            class="text-xs border-gray-300 rounded focus:border-blue-500 focus:ring-blue-500">
                                            <option value="en attente"
                                                {{ $project->statut == 'en attente' ? 'selected' : '' }}>En attente
                                            </option>
                                            <option value="approuve"
                                                {{ $project->statut == 'approuve' ? 'selected' : '' }}>Approuvé
                                            </option>
                                            <option value="annule"
                                                {{ $project->statut == 'annule' ? 'selected' : '' }}>Annulé</option>
                                        </select>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Empty state messages --}}
            @if ($projects->isEmpty() && request()->filled('statut'))
                <p class="mt-4 text-gray-500">Aucun projet trouvé pour ce statut.</p>
            @elseif ($projects->isEmpty())
                <p class="mt-4 text-gray-500">Aucun projet enregistré.</p>
            @endif

            {{-- Pagination --}}
            <div class="mt-6">
                {{ $projects->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
