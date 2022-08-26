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
            <th>id</th>
            <th>APREN_Nombre</th>
            <th>APREN_Documento</th>
            <th>APREN_Tipo_Documento</th>
            <th>APREN_Genero</th>
            <th>APREN_Estado</th>
            <th>APREN_Foto</th>

            <th>id_ficha</th>

            <th>Acciones</th>
    </tr></thead>
    <tbody>
    
    @foreach ($objetoretornado as $aprendiz)
            <tr>
            <td>{{ $aprendiz->id }}</td>
            <td>{{ $aprendiz->APREN_Nombre }}</td>
            <td>{{ $aprendiz->APREN_Documento }}</td>
            <td>{{ $aprendiz->APREN_Tipo_Documento }}</td>
            <td>{{ $aprendiz->APREN_Genero }}</td>
            <td>{{ $aprendiz->APREN_Estado }}</td>
            <td>{{ $aprendiz->APREN_Foto }}</td>

            <td>{{ $aprendiz->id_ficha }}</td>

            <td>
                
            <a href="{{ route('DeleteAprendiz', $aprendiz->id) }}"><i class='bx bxs-trash'></i></a>
            <a href="{{ route('UpdateAprendiz', $aprendiz) }}"><i class='bx bx-refresh'></i></a> 

            </td>
            </tr>
    @endforeach
    </tbody>
</table>

@endsection

