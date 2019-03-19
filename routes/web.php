<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// 1. E N T I D A D E S
Route::get('entidades/edit/{entidad}','EntidadController@edit');
Route::get('entidades/list', 'EntidadController@list');
Route::get('entidades/create', function (){ return view('entidadcreate');});
Route::get('entidades','EntidadController@index');
Route::get('entidades/{entidad}','EntidadController@show');
Route::post('entidades', 'EntidadController@store');
Route::patch('entidades/{entidad}', 'EntidadController@update');
Route::delete('entidades/{entidad}','EntidadController@destroy');

// 2. C A R G O S
Route::get('cargos/edit/{cargo}','CargoController@edit');
Route::get('cargos/list', 'CargoController@list');
Route::get('cargos/create', function (){ return view('cargocreate');});
Route::get('cargos', 'CargoController@index');
Route::get('cargos/{cargo}', 'CargoController@show');
Route::post('cargos', 'CargoController@store');
Route::patch('cargos/{cargo}', 'CargoController@update');
Route::delete('cargos/{cargo}','CargoController@destroy');

// 3. P E R F I L
Route::get('perfiles/edit/{perfil}','PerfilController@edit');
Route::get('perfiles/list', 'PerfilController@list');
Route::get('perfiles/create', function (){ return view('perfilcreate');});
Route::get('perfiles','PerfilController@index');
Route::get('perfiles/{perfil}', 'PerfilController@show');
Route::post('perfiles', 'PerfilController@store');
Route::patch('perfiles/{perfil}', 'PerfilController@update');
Route::delete('perfiles/{perfil}','PerfilController@destroy');

// 4. S E X O
Route::get('sexos/edit/{sexo}','SexoController@edit');
Route::get('sexos/list', 'SexoController@list');
Route::get('sexos/create', function (){ return view('sexocreate');});
Route::get('sexos','SexoController@index');
Route::get('sexos/{sexo}','SexoController@show');
Route::post('sexos','SexoController@store');
Route::patch('sexos/{sexo}', 'SexoController@update');
Route::delete('sexos/{sexo}','SexoController@destroy');

// 5. T I P O //TipoIncidencia
Route::get('tipos/edit/{tipo}', 'TipoIncidenciaController@edit');
Route::get('tipos/list', 'TipoIncidenciaController@list');
Route::get('tipos/create', 'TipoIncidenciaController@create');//function (){ return view('tipocreate');});
Route::get('tipos','TipoIncidenciaController@index');
Route::get('tipos/{tipo}','TipoIncidenciaController@show');
Route::post('tipos', 'TipoIncidenciaController@store');
Route::patch('tipos/{tipo}', 'TipoIncidenciaController@update');
Route::delete('tipos/{tipo}','TipoIncidenciaController@destroy');

// 6. M O D U L O S
Route::get('modulos/edit/{modulo}', 'ModuloController@edit');
Route::get('modulos/list', 'ModuloController@list');
Route::get('modulos/create', 'ModuloController@create'); //function (){ return view('modulocreate');});
Route::get('modulos','ModuloController@index');
Route::get('modulos/{modulo}','ModuloController@show');
Route::post('modulos','ModuloController@store');
Route::patch('modulos/{modulo}', 'ModuloController@update');
Route::delete('modulos/{modulo}', 'ModuloController@destroy');

// 7. I N C I D E N C I A S
Route::get('incidencias/edit/{incidencia}','IncidenciaController@edit');
Route::get('incidencias/list','IncidenciaController@list');
Route::get('incidencias/create', 'IncidenciaController@create');
Route::get('incidencias','IncidenciaController@index');
Route::get('incidencias/{incidencia}','IncidenciaController@show');
Route::post('incidencias','IncidenciaController@store');
Route::patch('incidencias/{incidencia}', 'IncidenciaController@update');
Route::delete('incidencias/{incidencia}','IncidenciaController@destroy');

// 8. U S U A R I O

Route::get('usuarios/edit/{usuario}','UserController@edit');
Route::get('usuarios/list','UserController@list');
Route::get('usuarios/create','UserController@create');
Route::get('usuarios','UserController@index');
Route::get('usuarios/{usuario}','UserController@show');
Route::post('usuarios','UserController@store');
Route::patch('usuarios/{usuario}','UserController@update');
Route::delete('usuarios/{usuario}','UserController@destroy');
