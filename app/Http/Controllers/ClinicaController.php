<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinica;
class ClinicaController extends Controller
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
    public function addClinica(Request $req){
        $clinica = new Clinica();
        $clinica->Nombre = $req->nombre;
        $clinica->Nif = $req->nif;
        $clinica->Prescriptor = $req->prescriptor;
        $clinica->Direccion = $req->direccion;
        $clinica->Email = $req->email;
        $clinica->Tel = $req->tel;
        $clinica->save();
        return redirect('/Clinicas');
    }
}
/*Route::get('/Agregar_Clinica',function(){
    $clinica = new Clinica();
    $clinica->Nombre = request('nombre');
    $clinica->Nif = request('nif');
    $clinica->Prescriptor = request('prescriptor');
    $clinica->Direccion = request('direccion');
    $clinica->Email = request('email');
    $clinica->Tel = request('tel');
    $clinica->save();
    
    return redirect('/Clinicas/NuevaClinica');
});*/