@extends('allergeen.layouts.edit')



@section('content')
<div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6 mt-10">

    {{-- Title --}}
    <h2 class="text-2xl font-semibold mb-4 text-gray-800">
        {{ $Metadata['title'] ?? 'Allergeen Bewerken' }}
    </h2>

   
    {{-- Edit Form --}}
    <form action="{{ route('allergeen.update', $allergeen->Id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        {{-- Naam --}}
        <div>
            <label for="naam" class="block text-gray-700 font-medium mb-1">Naam</label>
            <input
                type="text"
                id="naam"
                name="naam"
                value="{{ old('naam', $allergeen->Naam) }}"
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-300 focus:border-blue-400"
                required
            >
        </div>

        {{-- Omschrijving --}}
        <div>
            <label for="omschrijving" class="block text-gray-700 font-medium mb-1">Omschrijving</label>
            <textarea
                id="omschrijving"
                name="omschrijving"
                rows="4"
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-300 focus:border-blue-400"
                required
            >{{ old('omschrijving', $allergeen->Omschrijving) }}</textarea>
        </div>

        {{-- Submit Button --}}
        <div class="flex justify-end space-x-3 mt-4">
            <a href="{{ route('allergeen.index') }}"
                class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                Annuleren
            </a>

            <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Opslaan
            </button>
        </div>
    </form>
</div>
@endsection
