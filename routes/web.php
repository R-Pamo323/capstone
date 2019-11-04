<?php


<<<<<<< HEAD
Route::get('/home','PagesController@inicio')->name('home')->middleware('auth');
Route::get('/ubuscar','PagesController@buscarusuario')->name('ubuscar')->middleware('auth');
Route::get('/ubuscar/crear', 'PagesController@crearpaciente')->name('crearpaciente')->middleware('auth');
Route::get('/transferencia', 'PagesController@transferencia')->name('transferencia')->middleware('auth');
Route::get('/transferencia/crear/{id}','PagesController@creartransferencia')->name('creartransferencia')->middleware('auth');
Route::get('/','Auth\LoginController@showLoginForm');

Route::post('/ubuscar','PagesController@datospaciente')->name('datospaciente');
Route::post('/transferencia','PagesController@datostransferencia')->name('datostransferencia');
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout','Auth\LoginController@logout')->name('logout');

=======
Route::get('/','PagesController@inicio')->name('home');
Route::get('/ubuscar','PagesController@buscarusuario')->name('ubuscar');
Route::get('/ubuscar/crear', 'PagesController@crearpaciente')->name('crearpaciente');
Route::get('/transferencia', 'PagesController@transferencia')->name('transferencia');
Route::get('/transferencia/crear/{id}','PagesController@creartransferencia')->name('creartransferencia');
Route::get('/historia/crear/{id}','PagesController@crearhistoria')->name('crearhistoria');


Route::post('/ubuscar','PagesController@datospaciente')->name('datospaciente');
Route::post('/transferencia','PagesController@datostransferencia')->name('datostransferencia');
Route::post('/historia','PagesController@datoshistoria')->name('datoshistoria');
>>>>>>> 562e2b14b85a5cb03b8e522c778e7dddcba03e30


Route::get('/dperfil','PagesController@perfildoc')->name('detailsdoctor')->middleware('auth');;
Route::get('/transferencia/{id}', 'PagesController@detailstransferencia')->name('detailstransferencia');
Route::get('/ubuscar/{id}','PagesController@detailspaciente')->name('detailspaciente');


Route::get('/uhistorias/{id}','PagesController@historias')->name('uhistorias');
Route::get('/editarhistoria/{id}','PagesController@editarhistorias')->name('editarhistorias');
Route::put('/editarhistoria/{id}','PagesController@updatehistorias')->name('updatehistorias');
Route::delete('/eliminarhistoria/{id}','PagesController@deletehistorias')->name('deletehistorias');

Route::get('/editartransferencia/{id}','PagesController@editartransferencia')->name('editartransferencia');
Route::put('/editartransferencia/{id}','PagesController@updatetransferencia')->name('updatetransferencia');