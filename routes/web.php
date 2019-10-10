<?php

/*Route::view('/','home')->name('home');
Route::view('/ubuscar','ubuscar')->name('ubuscar');
Route::view('/ucrear','ucrear')->name('ucrear');
Route::view('/dperfil','dperfil')->name('dperfil');
Route::view('/transferencia','transferencia')->name('transferencia');*/

Route::get('/','PagesController@inicio')->name('home');
Route::get('/ubuscar','PagesController@buscarusuario')->name('ubuscar');
Route::get('/ubuscar/crear', 'PagesController@crearpaciente')->name('crearpaciente');

Route::get('/transferencia/crear/{id}','PagesController@creartransferencia')->name('creartransferencia');

Route::post('/ubuscar','PagesController@datospaciente')->name('datospaciente');
Route::post('/transferencia','PagesController@datostransferencia')->name('datostransferencia');


Route::get('/dperfil','PagesController@perfildoc')->name('perfil');




Route::get('/uhistorias/{id}','PagesController@historias')->name('uhistorias');