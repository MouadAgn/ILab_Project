<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validate;
use App\Models\Clinica;
use App\Http\Controllers\ClinicasController;
use App\Http\Controllers\ClinicaController;

/*
C:\Users\OEL\Pictures\projects\Laravel_Projects\ILab_Project\app\Http\Controllers\ClinicasController.php
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//   return view('welcome');
//});

 Route::view('/','welcome')->name('welcome');

 /*Route::match(['get','post'], '/user/profile', function()
 {

 });

 Route::any('users/{id}', function($id)
 {

 });

Route::redirect('/etudiant', '/', 301);*/

/*Route::get('users/{id}', function($id)
{
    return 'Hello Mouad' .$id;
})->where(['id' => '[0-9]+'])->name('user');*/

/*Route::get('users/{id?}', function($id = null)
{
    return 'Hello Mouad' .$id;
})->name('user');*/

//$url = Route('user');

/*Route::prefix('admin')->group(function()
{
    Route::get('users/{id}', function($id)
    {
        return 'Hello Mouad' . $id;
    });
});*/

/*Route::name('admin.')->group(function()
{
    Route::get('users/{id}', function($id)
    {
        return 'Hello Mouad' . $id;
    })->name('users');
});*/

Route::fallback(function(){
    return view('page404');
});

Route::get('users/{name}', function ($name)
{
    return view('users',['ObjJSON' => ['name'=>'Mouad', 'age'=>'22']]);
});

/*Route::get('test/', function ()
{
    return['name'=>'Mouad', 'age'=>'22'];
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/test','test');

Route::view('/users','users');

Route::view('body', 'layouts.body');

Route::view('/Results','TestTable')->name('ResultPage');

Route::group (['prefix' => 'etudiant','as'=>'etudiant.'], function() {
    Route::view('profile', 'Students.profile')->name('profile');
    Route::view('notes', 'Students.notes')->name('notes');
});

Route::view('/Informes','Informes');

Route::view('/Clinicas','Clinicas');

Route::view('/Plantillas','Plantillas');

Route::view('/Cliente','Cliente');

Route::view('/Informes/NuevoInforme','AgregarInforme')->name('NuevoInfome');

Route::view('/Clinicas/NuevaClinica','Agregar_Clinica')->name('NuevaClinica');

Route::view('/Plantillas/NuevaPlantilla','AgregarPlantilla')->name('NuevaPlantilla');

Route::view('/Cliente/NuevoCliente','Agregar_Cliente')->name('NuevoCliente');

Route::view('/Usuarios','Usuarios');

Route::view('/Usuarios/NuevoUsuario','AgregarUsuario')->name('NuevoUsuario  ');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Clinica
//Route::get('/Agregar_Clinica',function(){return view('/Agregar_Clinica');});
Route::get('/Agregar_Clinica',[ClinicaController::class,'addClinica']);


Route::get('Clinicas',[ClinicasController::class,'show']);