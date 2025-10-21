@extends('allergeen.layouts.create')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-8">
    <div class="w-full max-w-lg bg-white rounded-2xl shadow-lg p-8 border border-gray-200">

        {{-- Messages inside the card --}}
        <div class="space-y-3 mb-6">
            @if (session('success'))
                <div id="success-message" class="flex items-center justify-between bg-green-50 text-green-800 px-4 py-3 rounded-lg shadow-sm border border-green-200">
                    <span class="font-medium">{{ session('success') }}</span>
                    <button onclick="document.getElementById('success-message').remove()" class="text-green-600 font-bold hover:text-green-800 transition">×</button>
                </div>
            @endif

            @if ($errors->any())
                <div id="error-message" class="flex items-center justify-between bg-red-50 text-red-800 px-4 py-3 rounded-lg shadow-sm border border-red-200">
                    <span class="font-medium">{{ $errors->first() }}</span>
                    <button onclick="document.getElementById('error-message').remove()" class="text-red-600 font-bold hover:text-red-800 transition">×</button>
                </div>
            @endif
        </div>

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
                       maxlength="50"
                       required>
                @error('naam')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Omschrijving --}}
            <div>
                <label for="InputOmschrijving" class="block text-sm font-semibold text-gray-700 mb-2">Omschrijving</label>
                <textarea id="InputOmschrijving" name="omschrijving" rows="4"
                          placeholder="Voer een omschrijving in"
                          class="block w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-gray-600 focus:border-gray-600 shadow-sm py-2.5 px-3 text-gray-800 placeholder-gray-400"
                          maxlength="255"
                          required>{{ old('omschrijving') }}</textarea>
                @error('omschrijving')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
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

@push('scripts')
<script>
    // Auto-hide messages after 4 seconds
    setTimeout(() => {
        document.querySelectorAll('#success-message, #error-message').forEach(el => el.remove());
    }, 4000);
</script>
@endpush
