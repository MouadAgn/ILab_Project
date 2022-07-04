<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informe;
class InformesController extends Controller
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
        $data = Informe::all();
        return view('Informes',['informes'=>$data]);
    }
   public function addInforme(Request $req){
        $informe = new Informe();
        $informe->Nombre = $req->nombre;
        $informe->Dni = $req->dni;
        $informe->FechaNac = $req->fechanac;
        $informe->Sexo = $req->sexo;
        $informe->Email = $req->email;
        $informe->Email2 = $req->email2;
        $informe->Tel = $req->tel;
        $informe->Muestra = $req->muestra;
        $informe->Pin = $req->pin;
        $informe->FechaMuestra = $req->fechamuestra;
        $informe->HoraMuestra = $req->horamuestra;
        $informe->Clinica = $req->clinica;
        $informe->Plantilla = $req->plantilla;
        $informe->FechaEnvio = $req->fechaenvio;
        $informe->HoraEnvio = $req->horaenvio;
        $informe->save();
        return redirect('/Informes');
    }

    public function showInforme($id){
        $data = Informe::find($id);
        return view('/EditarInforme',['data'=>$data]);
    }

    public function editInforme(Request $req){
        $informe = Informe::find($req->id);
        $informe->Nombre = $req->nombre;
        $informe->Dni = $req->dni;
        $informe->FechaNac = $req->fechanac;
        $informe->Sexo = $req->sexo;
        $informe->Email = $req->email;
        $informe->Email2 = $req->email2;
        $informe->Tel = $req->tel;
        $informe->Muestra = $req->muestra;
        $informe->Pin = $req->pin;
        $informe->FechaMuestra = $req->fechamuestra;
        $informe->HoraMuestra = $req->horamuestra;
        $informe->Clinica = $req->clinica;
        $informe->Plantilla = $req->plantilla;
        $informe->FechaEnvio = $req->fechaenvio;
        $informe->HoraEnvio = $req->horaenvio;
        $informe->save();
        return redirect('/Informes');
    }

    public function deleteInforme($id){
        $data = Informe::find($id);
        $data->delete();
        return redirect('/Informes');
    }

}
