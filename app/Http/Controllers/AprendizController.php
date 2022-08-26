<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AprendizController extends Controller
{
    public function InsertApre(Request $aprendiz)
    {
        $instanciaaprendiz = new App\Aprendiz;
        $instanciaaprendiz->id = $aprendiz->id;
        $instanciaaprendiz->APREN_Nombre = $aprendiz->APREN_Nombre;
        $instanciaaprendiz->APREN_Documento = $aprendiz->APREN_Documento;
        $instanciaaprendiz->APREN_Tipo_Documento = $aprendiz->APREN_Tipo_Documento;
        $instanciaaprendiz->APREN_Genero = $aprendiz->APREN_Genero;
        $instanciaaprendiz->APREN_Estado = $aprendiz->APREN_Estado;
        $instanciaaprendiz->APREN_Foto = $aprendiz->APREN_Foto;

        //LLave foranea para relacionar tablas Aprendiz con ficha (1 ficha tiene muchos aprendices)
        $instanciaaprendiz->id_ficha = $aprendiz->id_ficha;


        $instanciaaprendiz->save();
        return redirect('Aprendiz/view')->with('guardado','El aprendiz fue guardado con exito!');
    }

    public function ViewApre()
    {
        $objetoretornado = App\Aprendiz::All();
        return view('Aprendiz/view',compact('objetoretornado'));
    }

    public function DeleteApre($id)
    {
        $deleteaprendiz = App\Aprendiz::FindOrFail($id);
        $deleteaprendiz->delete();
        return redirect('Aprendiz/view')->with('guardado','El aprendiz fue borrado con exito!');        
    }

    public function UpdateApre($id)
    {
        $updateAprendiz = App\Aprendiz::FindOrFail($id);
        #Lo enviamos a la vista:  
        return view('Aprendiz/update',compact('updateAprendiz'));
    }

    //Metodo que recibe como oparametro todo mediante la peticio Request y que todo se almacene el la 
    //variable proveedor
    public function UpdateBdApre(Request $aprendiz)
    {
        //Creamos una instancia al proveedor para poder acceder a los metodos que tiene y acceder a sus atributos.
        $instanciaaprendiz = App\Aprendiz::FindOrFail($aprendiz->id);
        $instanciaaprendiz->id = $aprendiz->id;
        $instanciaaprendiz->APREN_Nombre = $aprendiz->APREN_Nombre;
        $instanciaaprendiz->APREN_Documento = $aprendiz->APREN_Documento;
        $instanciaaprendiz->APREN_Tipo_Documento = $aprendiz->APREN_Tipo_Documento;
        $instanciaaprendiz->APREN_Genero = $aprendiz->APREN_Genero;
        $instanciaaprendiz->APREN_Estado = $aprendiz->APREN_Estado;
        $instanciaaprendiz->APREN_Foto = $aprendiz->APREN_Foto;

        $instanciaaprendiz->id_ficha = $aprendiz->id_ficha;

        $instanciaaprendiz->update();

        return redirect('Aprendiz/view')->with('guardado','Registro actualizado con Exito!');        
    }
}
