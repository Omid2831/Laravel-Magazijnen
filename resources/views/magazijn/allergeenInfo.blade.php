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
    <div class="bg-white shadow-lg rounded-lg overflow-hidden border-4 mt-4">
        <table class="min-w-full border-collapse border border-gray-400 text-center">
            <thead class="bg-gray-100">
                <tr>
                    <th
                        class="w-1/2 py-3 px-6 text-gray-700 font-semibold uppercase tracking-wider border-b border-gray-400">
                        Naam
                    </th>
                    <th
                        class="w-1/2 py-3 px-6 text-gray-700 font-semibold uppercase tracking-wider border-b border-gray-400">
                        Omschrijving
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @if ($hasStock_allergeen)
                    @foreach ($allergeen as $items)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="py-3 px-6 border-gray-300">
                                {{ $items->AllergeenNaam ?? 'N/A' }}
                            </td>
                            <td class="py-3 px-6 border-gray-300">
                                {{ $items->AllergeenOmschrijving ?? 'N/A' }}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr id="no-stock-message">
                        <td colspan="2" class="text-center px-6 py-8 bg-red-50 border-t border-gray-300">
                            <h2 class="text-2xl font-semibold text-red-700 mb-2">
                                {{ $errorMessage ?? 'Er is iets mis gegaan in de database' }}
                            </h2>
                            <p class="text-gray-600">U wordt automatisch teruggestuurd naar het magazijnoverzicht...</p>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection


@push('allergeen')
    @if (!$hasStock_allergeen)
        <script>
            // Redirect to warehouse overview after 4 seconds
            setTimeout(function() {
                window.location.href = "{{ route('magazijn.index') }}";
            }, 4000);
        </script>
    @endif
@endpush
