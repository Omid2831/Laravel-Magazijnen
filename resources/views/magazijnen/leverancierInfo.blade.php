@extends('magazijnen.layouts.leverancier')


@section('leverancierInfo')
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Leverings Informatie</h1>

    <div class="mb-4">
        <p><strong>Naam leverancier:</strong> {{ $leverancier->naam }}</p>
        <p><strong>Contactpersoon leverancier:</strong> {{ $leverancier->contactpersoon }}</p>
        <p><strong>Leverancier nummer:</strong> {{ $leverancier->nummer }}</p>
        <p><strong>Mobiel:</strong> {{ $leverancier->mobiel }}</p>
    </div>
@endsection

@section('t_leverancier')
{{-- <table class="min-w-full bg-white border">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Naam Product</th>
                <th class="py-2 px-4 border-b">Datum laatste levering</th>
                <th class="py-2 px-4 border-b">Aantal</th>
                <th class="py-2 px-4 border-b">Eerstvolgende levering</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leveringen as $levering)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $levering->product->naam }}</td>
                    <td class="py-2 px-4 border-b">{{ $levering->datum_laaste_levering }}</td>
                    <td class="py-2 px-4 border-b">{{ $levering->aantal }}</td>
                    <td class="py-2 px-4 border-b">{{ $levering->eerstvolgende_levering }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@endsection