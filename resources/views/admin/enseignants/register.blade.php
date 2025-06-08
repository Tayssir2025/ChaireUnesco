<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center" style="color: #0069B4;">
            {{ __('Créer Un Utilisateur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if (session('success'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.register.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="nom" class="block text-gray-700">Nom</label>
                        <input id="nom" type="text" name="nom" value="{{ old('nom') }}"
                               class="w-full mt-1 border rounded-md shadow-sm p-2" required autofocus>
                        @error('nom')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="prenom" class="block text-gray-700">Prénom</label>
                        <input id="prenom" type="text" name="prenom" value="{{ old('prenom') }}"
                               class="w-full mt-1 border rounded-md shadow-sm p-2" required>
                        @error('prenom')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700">Numéro de Téléphone</label>
                        <input id="phone" type="text" name="phone" value="{{ old('phone') }}"
                               class="w-full mt-1 border rounded-md shadow-sm p-2" required>
                        @error('phone')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}"
                               class="w-full mt-1 border rounded-md shadow-sm p-2" required>
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Mot de passe</label>
                        <input id="password" type="password" name="password"
                               class="w-full mt-1 border rounded-md shadow-sm p-2" required>
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-gray-700">Confirmer mot de passe</label>
                        <input id="password_confirmation" type="password" name="password_confirmation"
                               class="w-full mt-1 border rounded-md shadow-sm p-2" required>
                    </div>

                    <div class="mb-4">
                        <label for="role" class="block text-gray-700">Rôle</label>
                        <select id="role" name="role" class="w-full mt-1 border rounded-md shadow-sm p-2" required>
                            <option value="enseignant">Enseignant</option>
                            <option value="admin">Admin</option>
                        </select>
                        @error('role')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                                class="bouton">
                            Créer l'utilisateur
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
