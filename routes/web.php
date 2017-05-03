<?php

Route::get('/', function () {
    if(Auth::check())
        return redirect('portuario');
    return view('welcome');
});

Route::get('prueba',function() {
	$algo = \App\TrabajadorPortuario::all();
	return $algo;
});

Auth::routes();

Route::group(['middleware' => 'auth'],function () {
    Route::resource('portuario', 'TrabajadorPortuarioController');
    Route::get('home',function(){
		return redirect('portuario');
    });
});


