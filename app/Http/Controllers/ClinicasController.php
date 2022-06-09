<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinica;
class ClinicasController extends Controller
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
        $data = Clinica::all();
        return view('Clinicas',['clinicas'=>$data]);
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

    public function showClinica($id){
        $data = Clinica::find($id);
        return view('/Editar_Clinica',['data'=>$data]);
    }

    public function editClinica(Request $req){
        $clinica = Clinica::find($req->id);
        $clinica->Nombre = $req->nombre;
        $clinica->Nif = $req->nif;
        $clinica->Prescriptor = $req->prescriptor;
        $clinica->Direccion = $req->direccion;
        $clinica->Email = $req->email;
        $clinica->Tel = $req->tel;
        $clinica->save();
        return redirect('/Clinicas');
    }

    public function deleteClinica($id){
        $data = Clinica::find($id);
        $data->delete();
        return redirect('/Clinicas');
    }

}
