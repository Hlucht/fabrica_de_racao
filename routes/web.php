<?php

use Illuminate\Support\Facades\Route;

//Página de ingredientes
Route::resource('/ingredientes', 'App\Http\Controllers\IngredientController');

//Exclui um ingrediente
Route::post('/ingrediente/{id}', 'App\Http\Controllers\IngredientController@destroy');

//Edita um ingrediente
Route::post('ingrediente/edicao/{id}', 'App\Http\Controllers\IngredientController@update');



//Página de receitas
Route::resource('/receitas', 'App\Http\Controllers\RecipeController');

//Exclui uma receita
Route::post('/receita/{id}', 'App\Http\Controllers\RecipeController@destroy');

//Página de receita com os respectivos ingredientes
Route::resource('/receita', 'App\Http\Controllers\RecipeIngredientController');

//Edita uma receita
Route::post('receita/edicao/{id}', 'App\Http\Controllers\RecipeController@update');
