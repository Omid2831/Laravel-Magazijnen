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
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border rounded-lg shadow-sm">
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
                        <td colspan="4" class="text-center py-4 px-6 text-red-600 font-semibold">
                            <h2> {{ $error ?? 'Er is iets mis gegaan in de database' }}</h2>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection


@push('scripts')
    @if (!$hasStock)
        <script>
            // Redirect to warehouse overview after 4 seconds
            setTimeout(function() {
                window.location.href = "{{ route('magazijn.index') }}";
            }, 4000);
        </script>
    @endif
@endpush
