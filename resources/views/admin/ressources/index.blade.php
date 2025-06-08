<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center"  style="color: #0069B4;" >
            {{ __('Liste Des Ressources') }}
        </h2>
    </x-slot> 

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4 flex flex-wrap justify-between items-end gap-4">
                {{-- Formulaire de filtre + recherche (gauche) --}}
                <form method="GET" action="{{ route('admin.ressources.index') }}" class="flex flex-wrap gap-4 items-end">

                    {{-- Recherche par titre --}}
                    <div>
                        <label for="q" class="block text-sm font-medium text-gray-700">Rechercher :</label>
                        <input type="text" name="q" id="q" value="{{ request('q') }}"
                            placeholder="Titre de la ressource" class="mt-1 border-gray-300 rounded-md shadow-sm"
                            @if (request('type')) disabled @endif>
                    </div>

                    {{-- Réinitialiser --}}
                    <div>
                        <label class="block text-sm font-medium text-transparent">Réinitialiser</label>
                        <a href="{{ route('admin.ressources.index') }}" class="bouton">
                            Réinitialiser
                        </a>
                    </div>
                </form>

                {{-- Bouton "Ajouter une ressource" (droite) --}}
                <div>
                    <a href="{{ route('admin.ressources.create') }}" class="bouton">
                        Ajouter une ressource
                    </a>
                </div>
            </div>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Titre</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Type</th>
                                <th
                       z             class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($ressources as $ressource)
                                <tr>
                                    <td class="px-6 py-4 ">{{ $ressource->titre }}</td>
                                    <td class="px-6 py-4 ">Type {{ $ressource->type }}</td>
                                    <td class="px-6 py-4 ">
                                        <a href="{{ route('admin.ressources.edit', $ressource) }}"
                                            class="text-indigo-600 hover:underline">Modifier</a>
                                        <form action="{{ route('admin.ressources.destroy', $ressource) }}"
                                            method="POST" class="inline-block ml-2"
                                            onsubmit="return confirm('Supprimer cette ressource ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-600 hover:underline"
                                                type="submit">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($ressources->isEmpty())
                        <p class="mt-4 text-gray-500">Aucune ressource enregistrée.</p>
                    @endif

                    <div class="mt-4">
                        {{ $ressources->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
