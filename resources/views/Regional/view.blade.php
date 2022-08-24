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
            <th>Codigo_Regional</th>
            <th>Nombre_Regional</th>

            <th>Acciones</th>
    </tr></thead>
    <tbody>
    
    @foreach ($objetoretornado as $regional)
            <tr>
            <td>{{ $regional->Codigo_Regional }}</td>
            <td>{{ $regional->Nombre_Regional }}</td>

            <td>
                <a href="{{ route('DeleteRegional', $regional->id) }}"><i class='bx bxs-trash'></i></a>
                <a href="{{ route('UpdateRegional', $regional) }}"><i class='bx bx-refresh'></i></a> 
            </td>
            </tr>
    @endforeach
    </tbody>
</table>

@endsection

