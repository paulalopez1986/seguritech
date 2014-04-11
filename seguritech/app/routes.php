<?php

//1.- Muestra pagina inicial para la busqueda de una unidad por su Id
Route::get('/', function()
{
    return View::make('unidades.unidad');
});

//2.1.- Muestra detalle de la unidad encontrada
//Route::post('unidades/buscar', 'UnidadesController@buscarUnidad');

//2.2.- Muestra el detalle de las caracteristicas de la unidad indicada
Route::post('unidades/detalle', 'UnidadCaractController@mostrarCaract');

//3.- Actualiza las caracteristicas de la unidad encontrada
Route::post('unidades/actualizar', 'UnidadCaractController@actualizarCaract');