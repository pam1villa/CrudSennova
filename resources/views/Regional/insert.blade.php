@extends('menu')
@section('contenido')

<div class="ui piled text container segment">
    <h1 class="center">Registro Regional</h1>
    <form action="{{ route('InsertRegional') }}" method="POST">
    @csrf
        <div class="ui raised form segment">
            <div class="field">
                <label class="ui blue ribbon label">Codigo_Regional</label>
                <input placeholder="Codigo regional..." type="text" id="Codigo_Regional" name="Codigo_Regional">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Nombre_Regional</label>
                <input placeholder="Nombre regional..." type="text" id="Nombre_Regional" name="Nombre_Regional">
            </div>


            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Registrar">
            </center>
        </div>
    </form>
</div>
@endsection