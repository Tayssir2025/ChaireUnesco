<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center"  style="color: #0069B4;">
            {{ __('Modifier la Ressource') }}
        </h2>
    </x-slot> 

    <div class="py-6">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('admin.ressources.update', $ressource) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="titre" class="block text-sm font-medium text-gray-700">Titre</label>
                    <input type="text" name="titre" id="titre" value="{{ old('titre', $ressource->titre) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
            
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>{{ old('description', $ressource->description) }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="type" class="block text-sm font-medium text-gray-700">Fichier</label>
                    <input type="file" name="type" id="type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    @if($ressource->type)
                        <a href="{{ asset('storage/' . $ressource->type) }}" download class="text-blue-600 hover:underline">
                            Télécharger le PDF
                        </a>
                    @endif
                </div>


                <button type="submit" class="bouton">Mettre à jour</button>
            </form>
        </div>
    </div>
</x-app-layout>
