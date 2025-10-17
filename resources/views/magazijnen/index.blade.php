@extends('magazijnen.layouts.layouts')

@section('content')
    <h1>Overzicht Magazijn Jamin</h1>
    <table class="table-fixed border-collapse border border-gray-400 w-full text-left">
        <thead class="bg-gray-200">
            <tr>
                <th class="border border-gray-400 px-4 py-2">Barcode</th>
                <th class="border border-gray-400 px-4 py-2">Naam</th>
                <th class="border border-gray-400 px-4 py-2">Verpakkingseenheid</th>
                <th class="border border-gray-400 px-4 py-2">Aantal aanwezig</th>
                <th class="border border-gray-400 px-4 py-2">Allergenen Info</th>
                <th class="border border-gray-400 px-4 py-2">Leverantie Info</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($Magazijnen as $Magazijn )
            <tr>
                <td class="border border-gray-400 px-4 py-2">{{ $Magazijn->barcode }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $Magazijn->naam }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $Magazijn->verpakkingseenheid }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $Magazijn->aantal_aanwezig }}</td>
                {{-- <td class="border border-gray-400 px-4 py-2">{{ $Magazijn->allergenen_info }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $Magazijn->leverantie_info }}</td> --}}
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection
