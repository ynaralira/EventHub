@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')

<h1>Produtos</h1>
<table>
    <tr>
        <th>Codigo</th>
        <th>Nome do produto</th>
    </tr>
    <tr>
    @for($i = 0; $i < count($cds); $i++)
        <tr>
            <td class="cd">{{ $cds[$i] }}</td>
            <td class="name">{{ $names[$i] }}</td>
        </tr>
    @endfor
    </tr>
</table>
@endsection
