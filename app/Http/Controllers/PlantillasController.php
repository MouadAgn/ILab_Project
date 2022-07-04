<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plantilla;
use Illuminate\Support\File;

class PlantillasController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function show(){
        $data = Plantilla::all();
        return view('Plantillas',['plantillas'=>$data]);
    }

   public function addPlantilla(Request $req){
        $plantilla = new Plantilla();
        $plantilla->Nombre = $req->nombre;
        $file = $req->fichero;
        $filename = $file->getClientOriginalExtension();
        $req->file->move('files',$filename);
        $plantilla->NombreFichero =$filename;
        $plantilla->Descripcion = $req->descripcion;
        $plantilla->Hora = $req->hora;
        $plantilla->save();
        return redirect('/Plantillas');
    }

    public function showPlantilla($id){
        $data = Plantilla::find($id);
        return view('/EditarPlantilla',['data'=>$data]);
    }

    public function editPlantilla(Request $req){
        $plantilla = Plantilla::find($req->id);
        $plantilla->Nombre = $req->nombre;
        $plantilla->NombreFichero = $req->nombrefichero;
        $plantilla->Descripcion = $req->descripcion;
        $plantilla->Hora = $req->hora;
        $plantilla->save();
        return redirect('/Plantillas');
    }

    public function deletePlantilla($id){
        $data = Plantilla::find($id);
        $data->delete();
        return redirect('/Plantillas');
    }
    public function test(){
        return redirect("/AgregarPlantilla");
    }
}
