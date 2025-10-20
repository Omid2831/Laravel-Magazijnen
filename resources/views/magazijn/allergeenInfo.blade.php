@foreach($allergeen as $item)
    <tr>
        <td>{{ $item->Id }}</td>
        <td>{{ $item->Naam }}</td>
        <td>{{ $item->Omschrijving }}</td>
        <td>{{ $item->DatumGewijzigd }}</td>
    </tr>
@endforeach