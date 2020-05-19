<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ingredient', 'IngredientController@index')->name('ingredient');
Route::get('/show/{id}',"IngredientController@show")->name("show");
Route::get('/add', "IngredientController@create")->name('add');
Route::post("/saveIngredient", "IngredientController@store")->name("saveIngredient");
Route::get('/edit/{id}', "IngredientController@edit")->name("edit");
Route::post('/update/{id}', "IngredientController@update")->name("update");
Route::get("/delete/{id}", "IngredientController@destroy")->name("delete");