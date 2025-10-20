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