<x-app-layout>
    <x-slot name="header">
        <h2 style="color: #0069B4;" class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Modifier l\'Actualité') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('admin.actualites.update', $actualite) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="titre" style="color: #17478B;" class="block text-sm font-medium text-gray-700">Titre</label>
                    <input type="text" name="titre" id="titre" class="mt-1 block w-full" value="{{ old('titre', $actualite->titre) }}">
                </div>
                <div class="mb-4">
                    <label for="contenu" style="color: #17478B;" class="block text-sm font-medium text-gray-700">Contenu</label>
                    <textarea name="contenu" id="contenu" rows="4" class="mt-1 block w-full">{{ old('contenu', $actualite->contenu) }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="categorie" style="color: #17478B;" class="block text-sm font-medium text-gray-700">Catégorie</label>
                    <input type="text" name="categorie" id="categorie" class="mt-1 block w-full" value="{{ old('categorie', $actualite->categorie) }}">
                </div>
                <div class="mb-4">
                    <label for="lien_linkedin" style="color: #17478B;" class="block text-sm font-medium text-gray-700">Lien linkedin</label>
                    <input type="text" name="lien_linkedin" id="lien_linkedin" class="mt-1 block w-full" value="{{ old('lien_linkedin', $actualite->lien_linkedin) }}">
                </div>
                <div class="mb-4">
                    <label for="image" style="color: #17478B;" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" name="image" id="image" class="mt-1 block w-full">
                    @if ($actualite->image)  
                        <img src="{{ asset('storage/' . $actualite->image) }}" alt="Image actuelle" class="mt-2 w-32 h-32 object-cover">
                    @endif
                </div>
                <div class="mb-4">
                    <button style="background-color: #71BCEA; color: white;" type="submit" class="bouton">Mettre à jour</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
