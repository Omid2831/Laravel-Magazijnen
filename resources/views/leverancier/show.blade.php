@extends('leverancier.layouts.show')

@section('leverancierInfo')
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Geleverde producten</h1>

    <div class="mb-4">
        <p><strong>Naam leverancier:</strong> {{ $leverancier->Naam ?? 'N/A' }}</p>
        <p><strong>Contactpersoon leverancier:</strong> {{ $leverancier->Contactpersoon ?? 'N/A' }}</p>
        <p><strong>Leverancier nummer:</strong> {{ $leverancier->Leveranciernummer ?? 'N/A' }}</p>
        <p><strong>Mobiel:</strong> {{ $leverancier->Mobiel ?? 'N/A' }}</p>
    </div>
@endsection
