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
            <th>Codigo_Aprendiz</th>
            <th>Nombre_Aprendiz</th>
            <th>Documento_Aprendiz</th>
            <th>Tipo_Documento</th>
            <th>Genero_Aprendiz</th>
            <th>Estado_Aprendiz</th>
            <th>Identificador_Unico_Ficha</th>

            <th>Acciones</th>
    </tr></thead>
    <tbody>
    
    @foreach ($objetoretornado as $aprendiz)
            <tr>
            <td>{{ $aprendiz->Codigo_Aprendiz }}</td>
            <td>{{ $aprendiz->Nombre_Aprendiz }}</td>
            <td>{{ $aprendiz->Documento_Aprendiz }}</td>
            <td>{{ $aprendiz->Tipo_Documento }}</td>
            <td>{{ $aprendiz->Genero_Aprendiz }}</td>
            <td>{{ $aprendiz->Estado_Aprendiz }}</td>
            <td>{{ $aprendiz->Identificador_Unico_Ficha }}</td>

            <td>
                
            <a href="{{ route('DeleteAprendiz', $aprendiz->id) }}"><i class='bx bxs-trash'></i></a>
            <a href="{{ route('UpdateAprendiz', $aprendiz) }}"><i class='bx bx-refresh'></i></a> 

            </td>
            </tr>
    @endforeach
    </tbody>
</table>

@endsection

