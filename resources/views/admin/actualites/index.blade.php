<x-app-layout>
    <x-slot name="header">
        <h2 style="color: #0069B4;" class="font-semibold text-xl leading-tight text-center">
            {{ __('Liste Des Actualités') }}
        </h2>
    </x-slot> 

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4 flex flex-wrap justify-between items-end gap-4">
                {{-- Formulaire filtre + recherche (gauche) --}}
                <form method="GET" action="{{ route('admin.actualites.index') }}" class="flex flex-wrap gap-4 items-end">
                    {{-- Recherche par titre --}}
                    <div>
                        <label for="q" style="color: #17478B;" class="block text-sm font-medium">Rechercher :</label>
                        <input type="text" name="q" id="q" value="{{ request('q') }}"
                            placeholder="Titre de l’actualité" 
                            class="mt-1 rounded-md shadow-sm border border-gray-300 px-2 py-1 text-[#17478B]"
                            @if (request('categorie')) disabled @endif>
                    </div>

                    {{-- Réinitialiser --}}
                    <div>
                        <label class="block text-sm font-medium text-transparent">Réinitialiser</label>
                        <a href="{{ route('admin.actualites.index') }}"
                            style="background-color: #71BCEA; color: white; padding: 6px 12px; border-radius: 4px; display: inline-block; text-align:center;"
                            class="hover:opacity-90">
                            Réinitialiser
                        </a>
                    </div>
                </form>

                {{-- Bouton Ajouter (droite) --}}
                <div>
                    <a href="{{ route('admin.actualites.create') }}" 
                        style="background-color: #71BCEA; color: white; padding: 8px 16px; border-radius: 4px; display: inline-block; text-align:center;"
                        class="hover:opacity-90">
                        Ajouter une Actualité
                    </a>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider" style="color: #0069B4;">
                                    Titre
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider" style="color: #0069B4;">
                                    Contenu
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider" style="color: #0069B4;">
                                    Catégorie
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider" style="color: #0069B4;">
                                    Image
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider" style="color: #0069B4;">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($actualites as $actualite)
                                <tr>
                                    <td class="px-6 py-4" style="color: #17478B;">{{ $actualite->titre }}</td>
                                    <td class="px-6 py-4" style="color: #17478B;">{{ Str::limit($actualite->contenu, 50) }}</td>
                                    <td class="px-6 py-4" style="color: #17478B;">{{ $actualite->categorie }}</td>
                                    <td class="px-6 py-4">
                                        @if ($actualite->image)
                                            <img src="{{ asset('storage/' . $actualite->image) }}" alt="Image" class="w-16 h-16 object-cover">
                                        @else
                                            <span style="color: #17478B;">Pas d'image</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4" style="color: #17478B;">
                                        <a href="{{ route('admin.actualites.edit', $actualite) }}" style="color: #0069B4;" class="hover:underline">
                                            Modifier
                                        </a>
                                        <form action="{{ route('admin.actualites.destroy', $actualite) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Supprimer cette actualité ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="color: #e3342f;" class="hover:underline bg-transparent border-none p-0 cursor-pointer">
                                                Supprimer
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if ($actualites->isEmpty())
                        <p class="mt-4" style="color: #17478B;">Aucune actualité enregistrée.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
