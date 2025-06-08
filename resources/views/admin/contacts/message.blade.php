<x-app-layout>
<x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 text-center" style="color: #0069B4;">Détails Du Message</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="mb-4">
                    <h3 class="text-lg font-semibold">Nom :</h3>
                    <p>{{ $message->nom }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">Email :</h3>
                    <p>{{ $message->email }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">Titre :</h3>
                    <p>{{ $message->titre }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">Message :</h3>
                    <p class="whitespace-pre-line">{{ $message->message }}</p>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <form method="POST" action="{{ route('admin.contacts.toggle', $message) }}">
                        @csrf
                        @method('PATCH')
                        @if (!$message->lu)
                            <button
                                class="px-4 py-2 rounded text-white bg-red-500 hover:bg-red-600">
                                Marquer comme lu
                            </button>
                        @else
                            <button
                                class="px-4 py-2 rounded text-white bg-green-500 cursor-not-allowed"
                                disabled>
                                Déjà lu
                            </button>
                        @endif
                    </form>
                    <a href="{{ route('admin.contacts.index') }}" class="text-blue-600 hover:underline">
                        ← Retour aux messages
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
