@extends('menu')
@section('contenido')

<div class="ui piled text container segment">
    <h1 class="center">Registro Aprendiz</h1>
    <form action="{{ route('InsertAprendiz') }}" method="POST">
    @csrf
        <div class="ui raised form segment">
            <div class="field">
                <label class="ui blue ribbon label">Codigo_Aprendiz</label>
                <input placeholder="Codigo aprendiz..." type="text" id="Codigo_Aprendiz" name="Codigo_Aprendiz">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Nombre_Aprendiz</label>
                <input placeholder="Nombre aprendiz..." type="text" id="Nombre_Aprendiz" name="Nombre_Aprendiz">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Documento_Aprendiz</label>
                <input placeholder="Documento aprendiz..." type="text" id="Documento_Aprendiz" name="Documento_Aprendiz">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Tipo_Documento</label>
                <input placeholder="Tipo documento..." type="text" id="Tipo_Documento" name="Tipo_Documento">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Genero_Aprendiz</label>
                <input placeholder="Genero aprendiz..." type="text" id="Genero_Aprendiz" name="Genero_Aprendiz">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Estado_Aprendiz</label>
                <input placeholder="Estado aprendiz..." type="text" id="Estado_Aprendiz" name="Estado_Aprendiz">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Identificador_Unico_Ficha</label>
                <input placeholder="Identificador unico de ficha..." type="text" id="Identificador_Unico_Ficha" name="Identificador_Unico_Ficha">
            </div>


            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Registrar">
            </center>
        </div>
    </form>
</div>
@endsection