@extends('allergeen.layouts.create')

@section('content')
    <div class="container mx-auto px-4 w-1/2 border-4 p-4">
        <h2 class='text-center text-3xl font-bold text-shadow'>{{ $title }}</h2>
        <p class="text-center text-gray-500 m-2">{{ $description }}</p>
        <form method="POST" action="{{ route('allergeen.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="InputNaam">
                    Naam
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="InputNaam" name="naam" type="text" placeholder="Voer de naam van het allergeen in" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="InputOmschrijving">
                    Omschrijving
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="InputOmschrijving" name="omschrijving" rows="4" placeholder="Voer een omschrijving in" required></textarea>
            </div>
            <div class="flex justify-center">
                <button
                    class="text-center bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Allergeen Aanmaken
                </button>
            </div>
        </form>
    </div>
@endsection
