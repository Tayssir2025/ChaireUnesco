<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center" style="color: #0069B4;">
            {{ __('Modifier le Projet') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('projets.update', $project) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="titre" class="block text-sm font-medium text-gray-700">Titre</label>
                    <input type="text" name="titre" id="titre" value="{{ $project->titre }}" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="datedebut" class="block text-sm font-medium text-gray-700">Date de début</label>
                    <input type="date" name="datedebut" id="datedebut" value="{{ $project->datedebut->format('Y-m-d') }}" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="datefin" class="block text-sm font-medium text-gray-700">Date de fin</label>
                    <input type="date" name="datefin" id="datefin" value="{{ $project->datefin->format('Y-m-d') }}" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="4" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ $project->description }}</textarea>
                </div>

                @if(auth()->user()->is_admin)
                <div class="mb-4">
                    <label for="statut" class="block text-sm font-medium text-gray-700">Statut</label>
                    <select name="statut" id="statut"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        <option value="en attente" {{ $project->statut == 'en attente' ? 'selected' : '' }}>En attente</option>
                        <option value="approuve" {{ $project->statut == 'approuve' ? 'selected' : '' }}>Approuvé</option>
                        <option value="annule" {{ $project->statut == 'annule' ? 'selected' : '' }}>Annulé</option>
                    </select>
                </div>
                @endif

                <div class="mb-4">
                    <button type="submit" class="bouton">
                        Mettre à jour
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
