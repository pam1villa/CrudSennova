@extends('menu')
@section('contenido')

<div class="ui piled text container segment">
    <h1 class="center">Actualizar Regional></h1>
    <form action="{{ route('UpdateBdRegional') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$updateregional->id}}">

        <div class="ui raised form segment">

            <div class="field">
                <label class="ui blue ribbon label">Codigo_Regional</label>
                <input type="text" id="Codigo_Regional" name="Codigo_Regional" value="{{$updateregional->Codigo_Regional}}">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Nombre_Regional</label>
                <input type="text" id="Nombre_Regional" name="Nombre_Regional" value="{{$updateregional->Nombre_Regional}}">
            </div>

            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Actualizar">
            </center>
        </div>
    </form>
</div>
@endsection