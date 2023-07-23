<?php

  Route::get('/Cruds/Libros/lista','LibrosCrudController@index');
  Route::get('/Cruds/Libros/CrearNuevo','LibrosCrudController@create');
  Route::post('/Cruds/Libros/GuardarNuevo','LibrosCrudController@store');
  Route::get('/Cruds/Libros/Modificar/{id}','LibrosCrudController@show');
  Route::post('/Cruds/Libros/GuardarEdicion/{id}','LibrosCrudController@update');
  Route::get('/Cruds/Libros/Eliminar/{id}','LibrosCrudController@destroy');


  Route::get('/Cruds/Profiles/lista','ProfilesCrudController@index');
  Route::get('/Cruds/Profiles/CrearNuevo','ProfilesCrudController@create');
  Route::post('/Cruds/Profiles/GuardarNuevo','ProfilesCrudController@store');
  Route::get('/Cruds/Profiles/Modificar/{id}','ProfilesCrudController@show');
  Route::post('/Cruds/Profiles/GuardarEdicion/{id}','ProfilesCrudController@update');
  Route::get('/Cruds/Profiles/Eliminar/{id}','ProfilesCrudController@destroy');


  Route::get('/Cruds/Sis_albunes/lista','Sis_albunesCrudController@index');
  Route::get('/Cruds/Sis_albunes/CrearNuevo','Sis_albunesCrudController@create');
  Route::post('/Cruds/Sis_albunes/GuardarNuevo','Sis_albunesCrudController@store');
  Route::get('/Cruds/Sis_albunes/Modificar/{id}','Sis_albunesCrudController@show');
  Route::post('/Cruds/Sis_albunes/GuardarEdicion/{id}','Sis_albunesCrudController@update');
  Route::get('/Cruds/Sis_albunes/Eliminar/{id}','Sis_albunesCrudController@destroy');


  Route::get('/Cruds/Sis_categorias/lista','Sis_categoriasCrudController@index');
  Route::get('/Cruds/Sis_categorias/CrearNuevo','Sis_categoriasCrudController@create');
  Route::post('/Cruds/Sis_categorias/GuardarNuevo','Sis_categoriasCrudController@store');
  Route::get('/Cruds/Sis_categorias/Modificar/{id}','Sis_categoriasCrudController@show');
  Route::post('/Cruds/Sis_categorias/GuardarEdicion/{id}','Sis_categoriasCrudController@update');
  Route::get('/Cruds/Sis_categorias/Eliminar/{id}','Sis_categoriasCrudController@destroy');


  Route::get('/Cruds/Sis_eventos/lista','Sis_eventosCrudController@index');
  Route::get('/Cruds/Sis_eventos/CrearNuevo','Sis_eventosCrudController@create');
  Route::post('/Cruds/Sis_eventos/GuardarNuevo','Sis_eventosCrudController@store');
  Route::get('/Cruds/Sis_eventos/Modificar/{id}','Sis_eventosCrudController@show');
  Route::post('/Cruds/Sis_eventos/GuardarEdicion/{id}','Sis_eventosCrudController@update');
  Route::get('/Cruds/Sis_eventos/Eliminar/{id}','Sis_eventosCrudController@destroy');


  Route::get('/Cruds/Sis_fotos/lista','Sis_fotosCrudController@index');
  Route::get('/Cruds/Sis_fotos/CrearNuevo','Sis_fotosCrudController@create');
  Route::post('/Cruds/Sis_fotos/GuardarNuevo','Sis_fotosCrudController@store');
  Route::get('/Cruds/Sis_fotos/Modificar/{id}','Sis_fotosCrudController@show');
  Route::post('/Cruds/Sis_fotos/GuardarEdicion/{id}','Sis_fotosCrudController@update');
  Route::get('/Cruds/Sis_fotos/Eliminar/{id}','Sis_fotosCrudController@destroy');


  Route::get('/Cruds/Sis_secciones/lista','Sis_seccionesCrudController@index');
  Route::get('/Cruds/Sis_secciones/CrearNuevo','Sis_seccionesCrudController@create');
  Route::post('/Cruds/Sis_secciones/GuardarNuevo','Sis_seccionesCrudController@store');
  Route::get('/Cruds/Sis_secciones/Modificar/{id}','Sis_seccionesCrudController@show');
  Route::post('/Cruds/Sis_secciones/GuardarEdicion/{id}','Sis_seccionesCrudController@update');
  Route::get('/Cruds/Sis_secciones/Eliminar/{id}','Sis_seccionesCrudController@destroy');


  Route::get('/Cruds/Users/lista','UsersCrudController@index');
  Route::get('/Cruds/Users/CrearNuevo','UsersCrudController@create');
  Route::post('/Cruds/Users/GuardarNuevo','UsersCrudController@store');
  Route::get('/Cruds/Users/Modificar/{id}','UsersCrudController@show');
  Route::post('/Cruds/Users/GuardarEdicion/{id}','UsersCrudController@update');
  Route::get('/Cruds/Users/Eliminar/{id}','UsersCrudController@destroy');

