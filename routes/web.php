<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', function () {
    return 'ola mundo';
});

Route::get('/user', [UserController::class, 'get']);


//Route::get('/users/{name}', function ($name) {
//    return 'ola '.$name;
//});

//Route::fallback(function()){
//    return "Essa rota não existe"
//}

//Route::redirect('/users', '\user') //redirecionar rota

//Route::get($url, $callbak); //lista registro
//Route::post($url, $callbak);//ibserir registro
//Route::put($url, $callbak);//edição de registro 
//Route::patch($url, $callbak);//editar regsitros
//Route::delete($url, $callbak);//deletar regsitro