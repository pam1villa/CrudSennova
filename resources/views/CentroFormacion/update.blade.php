@extends('menu')
@section('contenido')

<div class="ui piled text container segment">
    <h1 class="center">Actualizar Centro De Formación</h1>
    <form action="{{ route('UpdateBdCentroFormacion') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$updatecentroformacion->id}}">

        <div class="ui raised form segment">

            <div class="field">
                <label class="ui blue ribbon label">Codigo_Centro</label>
                <input type="text" id="Codigo_Centro" name="Codigo_Centro" value="{{$updatecentroformacion->Codigo_Centro}}">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Nombre_Centro</label>
                <input type="text" id="Nombre_Centro" name="Nombre_Centro" value="{{$updatecentroformacion->Nombre_Centro}}">
            </div>

            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Actualizar">
            </center>
        </div>
    </form>
</div>
@endsection