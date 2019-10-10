<?php

/*Route::view('/','home')->name('home');
Route::view('/ubuscar','ubuscar')->name('ubuscar');
Route::view('/ucrear','ucrear')->name('ucrear');
Route::view('/dperfil','dperfil')->name('dperfil');
Route::view('/transferencia','transferencia')->name('transferencia');*/

Route::get('/','PagesController@inicio')->name('home');
Route::get('/ubuscar','PagesController@buscarusuario')->name('ubuscar');
Route::get('/ubuscar/crear', 'PagesController@crearpaciente')->name('crearpaciente');

Route::post('/ubuscar','PagesController@datospaciente')->name('datospaciente');

Route::get('/ucrear','PagesController@crearusuario')->name('ucrear');
Route::get('/dperfil','PagesController@perfildoc')->name('perfil');
Route::get('/transferencia','PagesController@transferencia')->name('transferencia');

Route::get('/uhistorias/{id}','PagesController@historias')->name('uhistorias');