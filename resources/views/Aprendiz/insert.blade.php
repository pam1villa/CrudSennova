@extends('layouts.app')
@section('contenido')

{{-- <div class="ui piled text container segment">
    <h1 class="center">Registro Aprendiz</h1>
    <form action="{{ route('InsertAprendiz') }}" method="POST">
    @csrf --}}

    
                <!-- Tooltip validations start -->
                <section class="tooltip-validations" id="tooltip-validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Registro Aprendiz</h4>
                                </div>
                                <div class="card-body">
                                    {{-- <p>
                                        <code>.{valid/invalid}-feedback</code> classes for <code>.{valid/invalid}-tooltip</code> classes to display
                                        validation feedback in a styled tooltip.
                                    </p> --}}
                                    <form class="needs-validation" novalidate>
                                        <div class="row g-1">
                                            <div class="col-md-4 col-12 mb-3 position-relative">
                                                <label class="form-label" for="validationTooltip01">Nombre Aprendiz</label>
                                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Ingrese su nombre completo..." value="Ingrese su nombre completo..." required />
                                                <div class="valid-tooltip">Looks good!</div>
                                            </div>
                                            <div class="col-md-4 col-12 mb-3 position-relative">
                                                <label class="form-label" for="validationTooltip02">Documento Aprendiz</label>
                                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Ingrese su documento..." value="Ingrese su documento..." required />
                                                <div class="valid-tooltip">Looks good!</div>
                                            </div>
                                            <div class="col-md-4 col-12 mb-3 position-relative">
                                                <label class="form-label" for="validationTooltip03">Tipo Documento</label>
                                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Ingrese su tipo de documento..." value="Ingrese su tipo de documento..." required />
                                                <div class="valid-tooltip">Looks good!</div>
                                            </div>
                                            <div class="col-md-4 col-12 mb-3 position-relative">
                                                <label class="form-label" for="validationTooltip04">Genero</label>
                                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese su genero..." value="Ingrese su genero..." required />
                                                <div class="valid-tooltip">Looks good!</div>
                                            </div>
                                            <div class="col-md-4 col-12 mb-3 position-relative">
                                                <label class="form-label" for="validationTooltip05">Estado Aprendiz</label>
                                                <input type="text" class="form-control" id="validationTooltip03" placeholder="Ingrese si su estado es activo/inactivo" required />
                                                <div class="invalid-tooltip">Please provide a valid city.</div>
                                            </div>
                                            <div class="col-md-4 col-12 mb-3 position-relative">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                                        <label for="formFile" class="form-label">Simple file input</label>
                                                        <input class="form-control" type="file" id="formFile" />
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>


@include('layouts.footer')
@endsection

        {{-- <div class="ui raised form segment">
            <div class="field">
                <label class="ui blue ribbon label">Codigo Aprendiz</label>
                <input placeholder="Codigo aprendiz..." type="text" id="id" name="id">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Nombre Aprendiz</label>
                <input placeholder="Nombre aprendiz..." type="text" id="APREN_Nombre" name="APREN_Nombre">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Documento Aprendiz</label>
                <input placeholder="Documento aprendiz..." type="text" id="APREN_Documento" name="APREN_Documento">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Tipo Documento</label>
                <input placeholder="Tipo documento..." type="text" id="APREN_Tipo_Documento" name="APREN_Tipo_Documento">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Genero Aprendiz</label>
                <input placeholder="Genero aprendiz..." type="text" id="APREN_Genero" name="APREN_Genero">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Estado Aprendiz</label>
                <input placeholder="Estado aprendiz..." type="text" id="APREN_Estado" name="APREN_Estado">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Foto</label>
                <input placeholder="Estado aprendiz..." type="text" id="APREN_Foto" name="APREN_Foto">
            </div>



            <div class="field">
                <label class="ui blue ribbon label">Identificador Unico Ficha</label>
                <input placeholder="Identificador unico de ficha..." type="text" id="id_ficha" name="id_ficha">
            </div>


            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Registrar">
            </center>
        </div>
    </form>
</div> --}}

