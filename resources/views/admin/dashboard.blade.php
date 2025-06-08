<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-[#0069B4] leading-tight text-center w-full" style="color: #0069B4;">
                {{ __('Dashboard') }}
            </h2>

            <!-- Icône de notification avec badge -->
            <div class="relative mr-4">
                <button onclick="toggleNotification()" class="text-[#17478B] hover:text-[#0069B4] focus:outline-none relative">
                    <!-- Icône cloche Heroicon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 
                                 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341C7.67 6.165 
                                 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 
                                 1.436L4 17h5m6 0a3 3 0 01-6 0m6 0H9"/>
                    </svg>

                    <!-- Badge de notifications -->
                    @if($unreadMessagesCount > 0 || $pendingProjectsCount > 0)
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white rounded-full text-xs px-1.5">
                            {{ $unreadMessagesCount + $pendingProjectsCount }}
                        </span>
                    @endif
                </button>

                <!-- Boîte de notification -->
                <div id="notification-toast"
                     class="hidden absolute right-0 mt-2 w-80 bg-white border border-blue-200 rounded shadow-lg p-4 text-sm text-[#17478B] z-50">
                    <div class="flex items-start space-x-2">
                        <svg class="h-5 w-5 text-[#0069B4] mt-0.5" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13 16h-1v-4h-1m1-4h.01M12 20c4.418 
                                  0 8-3.582 8-8s-3.582-8-8-8-8 
                                  3.582-8 8 3.582 8 8 8z"/>
                        </svg>
                        <span id="notification-content"></span>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12 space-y-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Message de bienvenue -->
            <div class="bg-white/90 overflow-hidden shadow-md sm:rounded-lg mb-6">
                <div class="p-6 text-[#17478B]">
                    {{ __('Bienvenue!') }}
                </div>
            </div>

            <!-- Statistiques -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition">
                    <h3 class="text-lg font-semibold text-[#0069B4]">Nombre total de projets</h3>
                    <p class="text-3xl font-bold text-[#17478B] mt-2">{{ $totalProjects }}</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition">
                    <h3 class="text-lg font-semibold text-[#0069B4]">Nombre total d'enseignants</h3>
                    <p class="text-3xl font-bold text-[#17478B] mt-2">{{ $totalEnseignants }}</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition">
                    <h3 class="text-lg font-semibold text-[#0069B4]">Nombre total de ressources</h3>
                    <p class="text-3xl font-bold text-[#17478B] mt-2">{{ $totalRessources }}</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition">
                    <h3 class="text-lg font-semibold text-[#0069B4]">Nombre total d'actualités</h3>
                    <p class="text-3xl font-bold text-[#17478B] mt-2">{{ $totalActualites }}</p>
                </div>
            </div>

            <!-- Calendrier des projets approuvés -->
            <div class="bg-white mt-8 shadow-lg rounded-lg p-6">
                <h3 class="text-lg font-semibold text-[#0069B4] mb-4">📅 Calendrier des projets approuvés</h3>

                @forelse($approvedProjects as $project)
                    <div class="border-l-4 border-[#0069B4] pl-4 mb-4 bg-blue-50 p-3 rounded">
                        <h4 class="text-md font-bold text-[#17478B]">{{ $project->titre }}</h4>
                        <p class="text-sm text-[#17478B]">
                            <span class="font-semibold">Début :</span> {{ \Carbon\Carbon::parse($project->datedebut)->format('d/m/Y') }} |
                            <span class="font-semibold">Fin :</span> {{ \Carbon\Carbon::parse($project->datefin)->format('d/m/Y') }}
                        </p>
                        <p class="text-sm mt-1 text-[#17478B]">
                            @php
                                $start = \Carbon\Carbon::parse($project->datedebut);
                                $end = \Carbon\Carbon::parse($project->datefin);
                                $now = \Carbon\Carbon::now();
                            @endphp

                            @if ($now->lt($start))
                                Ce projet commence dans {{ $now->diffInDays($start) }} jour(s) et se termine dans {{ $now->diffInDays($end) }} jour(s).
                            @elseif ($now->between($start, $end))
                                Ce projet est en cours. Il se termine dans {{ $now->diffInDays($end) }} jour(s).
                            @else
                                Ce projet est terminé depuis {{ $end->diffInDays($now) }} jour(s).
                            @endif
                        </p>
                    </div>
                @empty
                    <p class="text-[#17478B]">Aucun projet approuvé.</p>
                @endforelse
            </div>

            <!-- Projets en attente -->
            <div class="bg-white mt-8 shadow-lg rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-[#0069B4]">Projets en attente</h3>
                    <a href="{{ route('projets.index', ['statut' => 'en attente']) }}"
                       class="text-sm text-white bg-[#71BCEA] px-3 py-1 rounded hover:bg-[#5bb2d4]">
                        Voir plus
                    </a>
                </div>
                @if ($pendingProjects->isEmpty())
                    <p class="text-[#17478B]">Aucun projet en attente.</p>
                @else
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-[#17478B]">Titre</th>
                                <th class="px-4 py-2 text-left text-[#17478B]">Enseignant</th>
                                <th class="px-4 py-2 text-left text-[#17478B]">Début</th>
                                <th class="px-4 py-2 text-left text-[#17478B]">Fin</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            @foreach ($pendingProjects as $project)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 text-[#17478B]">{{ $project->titre }}</td>
                                    <td class="px-4 py-2 text-[#17478B]">{{ $project->user->nom ?? 'N/A' }}</td>
                                    <td class="px-4 py-2 text-[#17478B]">{{ \Carbon\Carbon::parse($project->datedebut)->format('d/m/Y') }}</td>
                                    <td class="px-4 py-2 text-[#17478B]">{{ \Carbon\Carbon::parse($project->datefin)->format('d/m/Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>

    <!-- SCRIPT de notification -->
    <script>
        function showNotification(message) {
            const toast = document.getElementById('notification-toast');
            const content = document.getElementById('notification-content');

            content.innerHTML = message;
            toast.classList.remove('hidden');

            setTimeout(() => {
                toast.classList.add('hidden');
            }, 10000);
        }

        function toggleNotification() {
            const toast = document.getElementById('notification-toast');
            toast.classList.toggle('hidden');
        }

        @if($unreadMessagesCount > 0 && $pendingProjectsCount > 0)
            showNotification("Vous avez {{ $unreadMessagesCount }} message(s) non lu(s) et {{ $pendingProjectsCount }} projet(s) en attente.");
        @elseif ($unreadMessagesCount > 0)
            showNotification("Vous avez {{ $unreadMessagesCount }} message(s) non lu(s).");
        @elseif ($pendingProjectsCount > 0)
            showNotification("Vous avez {{ $pendingProjectsCount }} projet(s) en attente.");
        @else
            showNotification("Aucune nouvelle notification.");
        @endif
    </script>
</x-app-layout>
