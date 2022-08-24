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
                <label class="ui blue ribbon label">Codigo_Aprendiz</label>
                <input type="text" id="Codigo_Aprendiz" name="Codigo_Aprendiz" value="{{$updateAprendiz->Codigo_Aprendiz}}">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Nombre_Aprendiz</label>
                <input type="text" id="Nombre_Aprendiz" name="Nombre_Aprendiz" value="{{$updateAprendiz->Nombre_Aprendiz}}">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Documento_Aprendiz</label>
                <input type="text" name="Documento_Aprendiz" id="Documento_Aprendiz" value="{{$updateAprendiz->Documento_Aprendiz}}" >
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Tipo_Documento</label>
                <input type="text" name="Tipo_Documento" id="Tipo_Documento" value="{{$updateAprendiz->Tipo_Documento}}" >
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Genero_Aprendiz</label>
                <input type="text" name="Genero_Aprendiz" id="Genero_Aprendiz" value="{{$updateAprendiz->Genero_Aprendiz}}" >
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Estado_Aprendiz</label>
                <input type="text" name="Estado_Aprendiz" id="Estado_Aprendiz" value="{{$updateAprendiz->Estado_Aprendiz}}" >
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Identificador_Unico_Ficha</label>
                <input type="text" name="Identificador_Unico_Ficha" id="Identificador_Unico_Ficha" value="{{$updateAprendiz->Identificador_Unico_Ficha}}" >
            </div>


            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Actualizar">
            </center>
        </div>
    </form>
</div>
@endsection