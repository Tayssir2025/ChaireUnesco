<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight text-center" style="color: #0069B4;">
            {{ __('Ajouter Une Actualité') }}
        </h2>
    </x-slot>

    <div class="py-6">   
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('admin.actualites.store') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="mb-4">
                    <label for="titre" class="block text-sm font-medium" style="color: #17478B;">Titre</label>
                    <input type="text" name="titre" id="titre"  style="color: #0069B4;" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('titre') }}">
                </div>
                <div class="mb-4">
                    <label for="contenu" class="block text-sm font-medium" style="color: #17478B;">Contenu</label>
                    <textarea name="contenu" id="contenu" rows="4"  style="color: #0069B4;" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('contenu') }}</textarea>
                </div> 
                <div class="mb-4">
                    <label for="categorie" class="block text-sm font-medium" style="color: #17478B;">Catégorie</label>
                    <input name="categorie" id="categorie" style="color: #0069B4;" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('categorie') }}">
                </div>
                <div class="mb-4">
                    <label for="lien_linkedin" class="block text-sm font-medium" style="color: #17478B;">Lien linkedin</label>
                    <input name="lien_linkedin" id="lien_linkedin" style="color: #0069B4;" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" >
                </div> 
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium" style="color: #17478B;">Image</label>
                    <input type="file" name="image" id="image" style="color: #0069B4;" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <button type="submit" class="px-4 py-2 rounded-md shadow-sm" style="background-color: #71BCEA; color: white;">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
