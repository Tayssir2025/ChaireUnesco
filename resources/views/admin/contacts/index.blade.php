<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 text-center" style="color: #0069B4;">Messages Reçus</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4">
            <form method="GET" action="{{ route('admin.contacts.index') }}" class="mb-6 flex items-center gap-4">
                <label for="lu" class="text-sm font-medium text-gray-700">Filtrer par statut :</label>
                <select name="lu" id="lu" onchange="this.form.submit()"
                    class="border-gray-300 rounded-md shadow-sm">
                    <option value="">Tous</option>
                    <option value="0" {{ request('lu') === '0' ? 'selected' : '' }}>Non lus</option>
                    <option value="1" {{ request('lu') === '1' ? 'selected' : '' }}>Lus</option>
                </select>
            </form>
            <br>
            @forelse($messages as $message)
                <div
                    class="bg-white p-4 rounded shadow border flex justify-between items-start
                    {{ $message->lu ? 'border-green-400' : 'border-red-400' }}">
                    
                    <div>
                        <h3 class="text-lg font-bold">{{ $message->titre }}</h3>
                        <p class="text-sm text-gray-600">De : {{ $message->nom }} ({{ $message->email }})</p>
                        <p class="mt-2">{{ \Illuminate\Support\Str::words(strip_tags($message->message), 4, '...') }}
                        </p> 
                        
                    </div>

                    <div class="ml-4">
                        <a href="{{ route('message', $message->id) }}" 
                        class="text-blue-600 hover:underline text-sm font-semibold">
                            Lire plus →
                        </a><br><br>
                        <a
                            class="px-3 py-1 rounded text-white
                            {{ $message->lu ? 'bg-green-500' : 'bg-red-500' }}">
                            {{ $message->lu ? 'Lu' : 'Non lu' }}
                        </a>
                    </div>    
                </div>
            @empty
                <p class="text-gray-500">Aucun message reçu.</p>
            @endforelse
           
        </div>
    </div>
</x-app-layout>
