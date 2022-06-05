<?php

use Illuminate\Support\Facades\Route;

/*
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

 Route::view('/','welcome')->name('home');

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

Route::view('/Results','TestTable');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
