<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class CentroFormacionController extends Controller
{
    public function InsertCen(Request $centroformacion)
    {
        $instanciacentroformacion = new App\CentroFormacion;
        $instanciacentroformacion->Codigo_Centro = $centroformacion->Codigo_Centro;
        $instanciacentroformacion->Nombre_Centro = $centroformacion->Nombre_Centro;
        
        $instanciacentroformacion->save();
        return redirect('CentroFormacion/view')->with('guardado','El centro de formacion fue guardado con exito!');
    }

    public function ViewCen()
    {
        $objetoretornado = App\CentroFormacion::All();
        return view('CentroFormacion/view',compact('objetoretornado'));
    }

    public function DeleteCen($id)
    {
        $deletecentroformacion = App\CentroFormacion::FindOrFail($id);
        $deletecentroformacion->delete();
        return redirect('CentroFormacion/view')->with('guardado','La regional fue borrada con exito!');        
    }

    public function UpdateCen($id)
    {
        $updatecentroformacion = App\CentroFormacion::FindOrFail($id);
        #Lo enviamos a la vista:  
        return view('CentroFormacion/update',compact('updatecentroformacion'));
    }

    //Metodo que recibe como oparametro todo mediante la peticio Request y que todo se almacene el la 
    //variable proveedor
    public function UpdateBdCen(Request $centroformacion)
    {
        //Creamos una instancia al proveedor para poder acceder a los metodos que tiene y acceder a sus atributos.
        $instanciacentroformacion = App\CentroFormacion::FindOrFail($centroformacion->id);
        $instanciacentroformacion->Codigo_Centro = $centroformacion->Codigo_Centro;
        $instanciacentroformacion->Nombre_Centro = $centroformacion->Nombre_Centro;

        $instanciacentroformacion->update();

        return redirect('CentroFormacion/view')->with('guardado','Registro actualizado con Exito!');        
    }
}
