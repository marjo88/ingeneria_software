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
    return view('index');
});

Route::get('/BuscarEmpleado', function () {
    return view('/pages/BuscarEmpleado');
});


Route::get('/Contador', function () {
    return view('/pages/Contador');
});

Route::get('/Contador', function () {
    return view('/pages/Contador');
});

Route::get('/ListadoEmpleados', function () {
    return view('pages/ListadoEmpleados');
});


Route::get('/adm_solicitudDIA', function () {
    return view('pages/adm_solicitudDIA');
});


Route::get('/adm_solicitudDuelo', function () {
    return view('pages/adm_solicitudDuelo');
});


Route::get('/adm_solicitudExcMedica', function () {
    return view('pages/adm_solicitudExcMedica');
});

Route::get('/adm_solicitudMaternidad', function () {
    return view('pages/adm_solicitudMaternidad');
});

Route::get('/adm_solicitudMatrimonio', function () {
    return view('pages/adm_solicitudMatrimonio');
});

Route::get('/adm_solicitudSalida', function () {
    return view('pages/adm_solicitudSalida');
});

Route::get('/calendarioPermisos', function () {
    return view('pages/calendarioPermisos');
});

Route::get('/login', function () {
    return view('pages/login');
});


Route::get('/500', function () {
    return view('pages/500');
});


Route::get('/404', function () {
    return view('pages/404');
});

Route::get('/registrarEmpleado', function () {
    return view('pages/register');
});





