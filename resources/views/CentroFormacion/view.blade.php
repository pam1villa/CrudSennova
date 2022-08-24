@extends('menu')

@section('contenido')

@if (empty(session('Guardado')))
@else 
    <div class="ui success message">
        <i class="close icon"></i>
        <div class="header">
            {{ session('guardado') }}
        </div>
    </div>
@endif

<table class="ui blue table">
    <thead>
        <tr>
            <th>Codigo_Centro</th>
            <th>Nombre_Centro</th>

            <th>Acciones</th>
    </tr></thead>
    <tbody>
    
    @foreach ($objetoretornado as $centroformacion)
            <tr>
            <td>{{ $centroformacion->Codigo_Centro }}</td>
            <td>{{ $centroformacion->Nombre_Centro }}</td>

            <td>
                <a href="{{ route('DeleteCentroFormacion', $centroformacion->id) }}"><i class='bx bxs-trash'></i></a>
                <a href="{{ route('UpdateCentroFormacion', $centroformacion) }}"><i class='bx bx-refresh'></i></a> 
            </td>
            </tr>
    @endforeach
    </tbody>
</table>

@endsection

