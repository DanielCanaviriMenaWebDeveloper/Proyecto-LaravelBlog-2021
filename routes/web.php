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

Route::get('/acerca-de', function () {
    return "Hola estas en acerca de";
});

Route::get('/test', function () {
    return "Hola estas en la vista test";
});


Route::get('/nosotros', function () {
    return "<h1>Sobre Nosotros</h1>";
});

Route::get('app', function () {
    return view('layouts/app');
});

Route::get('child', function () {
    return view('layouts/child');
});

/* Envio de parametros mediante get */

/* Ejemplo de envio de 2 parametros mediante get */
Route::get('saludo/{nombre}/{apellido}', function( $nombre, $apellido ) {
    return "Hola como estas $nombre $apellido.";
});

/* Parametro opcional con valor por defecto */
Route::get('saludo/{nombre?}', function ($nombre = "Nombre opcional") {
    return "Hola como estas $nombre"; 
});

/* Name Routes : Rutas con Nombre */

Route::get('/mediasDeportivas', function () {
    return "<h1>Toda la información de nuestras medias deportivas</h1>";
});

Route::get('/medias', function () {
    return "<h1>Ir a medias deportivas <a href='/mediasDeportivas'>Medias Deportivas</a></h1>";
});

