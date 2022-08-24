<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AprendizController extends Controller
{
    public function InsertApre(Request $aprendiz)
    {
        $instanciaaprendiz = new App\Aprendiz;
        $instanciaaprendiz->Codigo_Aprendiz = $aprendiz->Codigo_Aprendiz;
        $instanciaaprendiz->Nombre_Aprendiz = $aprendiz->Nombre_Aprendiz;
        $instanciaaprendiz->Documento_Aprendiz = $aprendiz->Documento_Aprendiz;
        $instanciaaprendiz->Tipo_Documento = $aprendiz->Tipo_Documento;
        $instanciaaprendiz->Genero_Aprendiz = $aprendiz->Genero_Aprendiz;
        $instanciaaprendiz->Estado_Aprendiz = $aprendiz->Estado_Aprendiz;
        $instanciaaprendiz->Identificador_Unico_Ficha = $aprendiz->Identificador_Unico_Ficha;


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
        $instanciaaprendiz->Codigo_Aprendiz = $aprendiz->Codigo_Aprendiz;
        $instanciaaprendiz->Nombre_Aprendiz = $aprendiz->Nombre_Aprendiz;
        $instanciaaprendiz->Documento_Aprendiz = $aprendiz->Documento_Aprendiz;
        $instanciaaprendiz->Tipo_Documento = $aprendiz->Tipo_Documento;
        $instanciaaprendiz->Genero_Aprendiz = $aprendiz->Genero_Aprendiz;
        $instanciaaprendiz->Estado_Aprendiz = $aprendiz->Estado_Aprendiz;
        $instanciaaprendiz->Identificador_Unico_Ficha = $aprendiz->Identificador_Unico_Ficha;

        $instanciaaprendiz->update();

        return redirect('Aprendiz/view')->with('guardado','Registro actualizado con Exito!');        
    }
}
