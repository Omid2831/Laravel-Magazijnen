@extends('allergeen.layouts.index')

@section('content')
    <x-alerts />
    <h2 class='text-center text-3xl font-bold text-shadow'>{{ $Metadata['title'] }}</h2>
    <a href="{{ route('allergeen.create') }}"
        class="inline-block bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium px-5 py-2 rounded-lg border border-gray-300 transition-colors duration-200">
        Overzicht Leverancier   
    </a>

    <div class="bg-white shadow-lg rounded-lg overflow-x-auto border-4 mt-4">
        <table class="table-fixed border-collapse border border-gray-400 w-full text-center">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Naam</th>
                    <th class="border border-gray-400 px-4 py-2">ContactPersoon</th>
                    <th class="border border-gray-400 px-4 py-2">leveranciernummer</th>
                    <th class="border border-gray-400 px-4 py-2">mobiel</th>
                    <th class="border border-gray-400 px-4 py-2">Aantal verschillende producten </th>
                    <th class="border border-gray-400 px-4 py-2">Toonproducten</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leveranciers as $item)
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">{{ 'will be filled later "Naam" '}}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ 'will be filled later "ContactPersoon" ' }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ 'will be filled later "Leveranciernummer" ' }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ 'will be filled later "Mobiel" ' }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ 'will be filled later "Aantal verschillende producten" ' }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ 'will be filled later  "ToonProducten" ' }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
