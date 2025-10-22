@extends('allergeen.layouts.create')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100 py-8">
        <div class="w-full max-w-lg bg-white rounded-2xl shadow-lg p-8 border border-gray-200">
            {{-- Alert message --}}
            <x-alerts />
            {{-- Title & Description --}}
            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold text-gray-800 mb-1">{{ $title }}</h2>
                <p class="text-gray-500">{{ $description }}</p>
            </div>

            {{-- Form --}}
            <form method="POST" action="{{ route('allergeen.store') }}" class="space-y-6">
                @csrf
                {{-- Naam --}}
                <div>
                    <label for="InputNaam" class="block text-sm font-semibold text-gray-700 mb-2">Naam</label>
                    <input id="InputNaam" name="naam" type="text" value="{{ old('naam') }}"
                        placeholder="Voer de naam van het allergeen in"
                        class="block w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-gray-600 focus:border-gray-600 shadow-sm py-2.5 px-3 text-gray-800 placeholder-gray-400"
                        maxlength="50" required>
                    @error('naam')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Omschrijving --}}
                <div>
                    <label for="InputOmschrijving"
                        class="block text-sm font-semibold text-gray-700 mb-2">Omschrijving</label>
                    <textarea id="InputOmschrijving" name="omschrijving" rows="4" placeholder="Voer een omschrijving in"
                        class="block w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-gray-600 focus:border-gray-600 shadow-sm py-2.5 px-3 text-gray-800 placeholder-gray-400"
                        maxlength="255" required>{{ old('omschrijving') }}</textarea>
                    @error('omschrijving')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit --}}
                <div class="flex justify-center">
                    <button type="submit"
                        class="bg-gray-700 hover:bg-gray-900 text-white font-semibold py-2.5 px-6 rounded-lg transition duration-200 shadow-md">
                        Allergeen Aanmaken
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
