@extends('menu')
@section('contenido')

<div class="ui piled text container segment">
    <h1 class="center">Actualizar Aprendiz</h1>
    <form action="{{ route('UpdateBdAprendiz') }}" method="POST">
    @csrf
        <div class="ui raised form segment">
            //Envia de manera privada el id.
            <input type="hidden" name="id" value="{{$updateAprendiz->id}}">

            <div class="field">
                <label class="ui blue ribbon label">Codigo Aprendiz</label>
                <input type="text" id="id" name="id" value="{{$updateAprendiz->id}}">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Nombre Aprendiz</label>
                <input type="text" id="APREN_Nombre" name="APREN_Nombre" value="{{$updateAprendiz->APREN_Nombre}}">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Documento Aprendiz</label>
                <input type="text" name="APREN_Documento" id="APREN_Documento" value="{{$updateAprendiz->APREN_Documento}}" >
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Tipo Documento</label>
                <input type="text" name="APREN_Tipo_Documento" id="APREN_Tipo_Documento" value="{{$updateAprendiz->APREN_Tipo_Documento}}" >
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Genero Aprendiz</label>
                <input type="text" name="APREN_Genero" id="APREN_Genero" value="{{$updateAprendiz->APREN_Genero}}" >
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Estado Aprendiz</label>
                <input type="text" name="APREN_Estado" id="APREN_Estado" value="{{$updateAprendiz->APREN_Estado}}" >
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Foto</label>
                <input type="text" name="APREN_Foto" id="APREN_Foto" value="{{$updateAprendiz->APREN_Foto}}" >
            </div>

                //Modificar segun como se realice para una llave foranea
            <div class="field">
                <label class="ui blue ribbon label">Identificador Unico Ficha</label>
                <input type="text" name="id_ficha" id="id_ficha" value="{{$updateAprendiz->id_ficha}}" >
            </div>


            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Actualizar">
            </center>
        </div>
    </form>
</div>
@endsection