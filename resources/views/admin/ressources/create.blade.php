<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight text-center" style="color: #0069B4;">
            {{ __('Ajouter Une Ressource') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bg-white p-10 shadow-xl rounded-lg">
            <form action="{{ route('admin.ressources.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="titre" class="block text-sm font-medium" style="color: #17478B;">Titre</label>
                    <input type="text" name="titre" id="titre" value="{{ old('titre') }}"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200"
                        required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium" style="color: #17478B;">Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200"
                        required>{{ old('description') }}</textarea>
                </div>

                <div class="mb-6">
                    <label for="type" class="block text-sm font-medium" style="color: #17478B;">Fichier</label>
                    <input type="file" name="type" id="type"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200"
                        required>
                </div>

                <button type="submit"
                    class="px-4 py-2 rounded-md text-white font-semibold transition duration-200"
                    style="background-color: #71BCEA;"
                    onmouseover="this.style.backgroundColor='#5AB1D9';"
                    onmouseout="this.style.backgroundColor='#71BCEA';">
                    Enregistrer
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
