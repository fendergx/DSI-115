<?php

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

Route::get('/test', function () {
    return 'Prueba de Laravel';
});

//MIO
Route::get('/usuarios', 'DorisController@index');

Route::get('/datos', 'DorisController@datosList');


Route::get('/datos/new', 'DorisController@datosNew');


Route::get('/datos/{id}','DorisController@datoShow')->where('id','[0-9]+');

//FIN MIO

Route::get('/usuarios/{id}', function ($id) {
    return "Mostrando detalle del usuario: $id";
})->where('id','[0-9]+');

Route::get('/usuarios/nuevo', function () {
    return 'Crear nuevo usuario';
});