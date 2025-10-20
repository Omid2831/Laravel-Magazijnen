@extends('magazijn.layouts.allergeen')

@section('allergeenInfo')
    <h1 class='text-3xl font-bold text-gray-800 mb-6'>{{ $title }}</h1>

    <div class="mb-4 border-4 p-4 m-4 rounded w-100 bg-yellow-50">
        @foreach ($products as $product)
            <p><strong>Allergeen Naam:</strong> {{ $product->Naam ?? 'N/A' }}</p>
            <p><strong>Barcode:</strong> {{ $product->Barcode ?? 'N/A' }}</p>
        @endforeach
    </div>

@endsection


@section('t_allergeen')
    <div class="bg-white shadow-lg rounded-lg overflow-x-auto border-4 mt-4">
        <table class="table-fixed border-collapse border border-gray-400 w-full text-center">
            <thead class="bg-gray-100">
                <tr>
                    <th class="text-center py-3 px-6 text-gray-700 uppercase tracking-wider border-b">Naam</th>
                    <th class="text-center py-3 px-6 text-gray-700 uppercase tracking-wider border-b">Omschrijving</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($allergeen as $items)
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <td class="text-center py-3 px-6">{{ $items->AllergeenNaam ?? 'N/A' }}</td>
                        <td class="text-center py-3 px-6">{{ $items->AllergeenOmschrijving ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection