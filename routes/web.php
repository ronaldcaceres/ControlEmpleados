<?php

Route::get('/', function () {
    if(Auth::check())
        return redirect('portuario');
    return view('welcome');
});

Route::get('prueba',function() {
    $trabajador = \App\TrabajadorPortuario::first();
    return $trabajador->residencia;
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('portuario', 'TrabajadorPortuarioController');
    Route::get('trabajador/portuarios', 'TrabajadorPortuarioController@getPortuarios')->name('portuario.getP');
    Route::get('home',function(){return redirect('portuario');});
    Route::resource('portuario.domicilio', 'LogResidenciaController', ['only' => ['index','store','update','destroy','create']]);
});

