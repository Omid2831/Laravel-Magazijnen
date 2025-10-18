@extends('magazijn.layouts.index')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ $title }}</h1>
    <div class="bg-white shadow-lg rounded-lg overflow-x-auto border-4 mt-4">
        <table class="table-fixed border-collapse border border-gray-400 w-full text-center">
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
                @foreach ($products as $product)
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">{{ $product->Barcode }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $product->Naam }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $product->VerpakkingsEenheid }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $product->AantalAanwezig }}</td>
                        {{--  note : use this for your hovering links
                        class="text-gray-500 hover:text-pink-600 hover:drop-shadow-lg hover:shadow-pink-500/50
                        transition-all duration-300 hover:font-semibold hover:scale-105">
                        --}}
                        <td class="border border-gray-400 px-4 py-2">
                            <form action="{{ route('magazijn.allergenenInfo', $product->Id) }}" method="POST">
                                @csrf
                                @method('GET')
                                <button type="submit"
                                    class="text-gray-500 hover:text-pink-600 hover:drop-shadow-lg hover:shadow-pink-500/50
                        transition-all duration-300 hover:font-semibold hover:scale-105">Allergenen
                                    Info</button>
                            </form>
                        </td>
                        <td class="border border-gray-400 px-4 py-2">
                            <form action="{{ route('magazijn.leverantieInfo', $product->Id) }}" method="POST">
                                @csrf
                                @method('GET')
                                <button type="submit"  class="text-gray-500 hover:text-blue-600 hover:drop-shadow-lg hover:shadow-pink-500/50
                        transition-all duration-300 hover:font-semibold hover:scale-105">Leverantie Info</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
