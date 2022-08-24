@extends('menu')
@section('contenido')

<div class="ui piled text container segment">
    <h1 class="center">Registro Centro De Formacion</h1>
    <form action="{{ route('InsertCentroFormacion') }}" method="POST">
    @csrf
        <div class="ui raised form segment">
            <div class="field">
                <label class="ui blue ribbon label">Codigo_Centro</label>
                <input placeholder="Codigo centro..." type="text" id="Codigo_Centro" name="Codigo_Centro">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Nombre_Centro</label>
                <input placeholder="Nombre centro..." type="text" id="Nombre_Centro" name="Nombre_Centro">
            </div>


            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Registrar">
            </center>
        </div>
    </form>
</div>
@endsection