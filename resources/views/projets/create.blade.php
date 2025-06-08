<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center" style="color: #0069B4;" >
            {{ __('Ajouter Un Projet') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('projets.store') }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                <div class="mb-4">
                    <label for="titre" class="block text-sm font-medium text-gray-700">Titre</label>
                    <input type="text" name="titre" id="titre" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="datedebut" class="block text-sm font-medium text-gray-700">Date de début</label>
                    <input type="date" name="datedebut" id="datedebut" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="datefin" class="block text-sm font-medium text-gray-700">Date de fin</label>
                    <input type="date" name="datefin" id="datefin" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="4" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                </div>
                <div class="mb-4">
                    <button type="submit" class="bouton">
                        Ajouter Projet
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
