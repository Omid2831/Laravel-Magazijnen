@extends('leverancier.layouts.show')

@section('leverancierInfo')
    <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ $title }}</h1>

    <div class="mb-4">
        <p><strong>Naam leverancier:</strong> {{ $leverancier->Naam ?? 'N/A' }}</p>
        <p><strong>Contactpersoon leverancier:</strong> {{ $leverancier->Contactpersoon ?? 'N/A' }}</p>
        <p><strong>Leverancier nummer:</strong> {{ $leverancier->Leveranciernummer ?? 'N/A' }}</p>
        <p><strong>Mobiel:</strong> {{ $leverancier->Mobiel ?? 'N/A' }}</p>
    </div>
@endsection

@section('t_leverancier')
<div class="mt-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Producten</h2>
        @if (count($products) > 0)
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Naam product</th>
                        <th class="py-2 px-4 border-b">Aantal in Magazijn</th>
                        <th class="py-2 px-4 border-b">Verpakkingseenheid</th>
                        <th class="py-2 px-4 border-b">Laatste levering</th>
                        <th class="py-2 px-4 border-b">Nieuwe levering</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $product->ProductNaam }}</td>
                            <td class="py-2 px-4 border-b">{{ $product->AantalInMagazijn }}</td>
                            <td class="py-2 px-4 border-b">{{ $product->Verpakkingseenheid }}</td>
                            <td class="py-2 px-4 border-b">{{ $product->LaatsteLevering }}</td>
                            <td class="py-2 px-4 border-b">here komt nog wat later</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Er zijn geen producten gevonden voor deze leverancier.</p>
        @endif
    </div>
@endsection