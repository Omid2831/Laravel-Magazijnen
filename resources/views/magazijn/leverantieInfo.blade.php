@extends('magazijn.layouts.leverancier')


@section('leverancierInfo')
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Leverings Informatie</h1>

    <div class="mb-4">
        @foreach ($leverancier as $l)
            <p><strong>Naam leverancier:</strong> {{ $l->Naam ?? 'N/A' }}</p>
            <p><strong>Contactpersoon leverancier:</strong> {{ $l->Contactpersoon ?? 'N/A' }}</p>
            <p><strong>Leverancier nummer:</strong> {{ $l->Leveranciernummer ?? 'N/A' }}</p>
            <p><strong>Mobiel:</strong> {{ $l->Mobiel ?? 'N/A' }}</p>
        @endforeach
    </div>
@endsection

@section('t_leverancier')
    <div class="bg-white shadow-lg rounded-lg overflow-x-auto border-4 mt-4">
        <table class="table-fixed border-collapse border border-gray-400 w-full text-center">
            <thead class="bg-gray-100">
                <tr>
                    <th class="text-center py-3 px-6 text-gray-700 uppercase tracking-wider border-b">Naam Product</th>
                    <th class="text-center py-3 px-6 text-gray-700 uppercase tracking-wider border-b">Datum laatste levering
                    </th>
                    <th class="text-center py-3 px-6 text-gray-700 uppercase tracking-wider border-b">Aantal</th>
                    <th class="text-center py-3 px-6 text-gray-700 uppercase tracking-wider border-b">Eerstvolgende levering
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @if ($hasStock)
                    @foreach ($producten as $product)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="text-center py-3 px-6">{{ $product->ProductNaam ?? 'N/A' }}</td>
                            <td class="text-center py-3 px-6">{{ $product->DatumLaatsteLevering ?? 'N/A' }}</td>
                            <td class="text-center py-3 px-6">{{ $product->AantalGeleverd ?? 'N/A' }}</td>
                            <td class="text-center py-3 px-6">{{ $product->EerstvolgendeLevering ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr id="no-stock-message">
                        <td colspan="4" class="text-center px-6 py-8 bg-red-50">
                                <h2 class="text-2xl font-semibold text-red-700 mb-2">
                                    {{ $error ?? 'Er is iets mis gegaan in de database' }}
                                </h2>
                                <p class="text-gray-600">U wordt automatisch teruggestuurd naar het magazijnoverzicht...</p>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection


@push('leverancier')
    @if (!$hasStock)
        <script>
            // Redirect to warehouse overview after 4 seconds
            setTimeout(function() {
                window.location.href = "{{ route('magazijn.index') }}";
            }, 4000);
        </script>
    @endif
@endpush
