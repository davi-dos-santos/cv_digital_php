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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', function () {
    return 'ola mundo';
});

Route::get($url, $callbak); //lista registro
Route::post($url, $callbak);//ibserir registro
Route::put($url, $callbak);//edição de registro 
Route::patch($url, $callbak);//editar regsitros
Route::delete($url, $callbak);//deletar regsitro