<?php

Route::get('/', function () {
    if(Auth::check())
        return redirect('portuario');
    return view('welcome');
});

Route::get('prueba',function() {
    $trabajador = \App\TrabajadorPortuario::first();
    dd ($trabajador->residencia->isEmpty());
});

Auth::routes();

Route::group(['middleware' => 'auth'],function () {
    Route::resource('portuario', 'TrabajadorPortuarioController');
    Route::get('trabajador/portuarios', 'TrabajadorPortuarioController@getPortuarios')->name('portuario.getP');
    Route::resource('portuario.residencia','LogResidenciaController',['only' => ['index','show','store','update','destroy']]);
    Route::get('home',function(){return redirect('portuario');});
});

