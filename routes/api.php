<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('pizzas', 'PizzaController')->only('index');
Route::post('pizzas/{pizza_id}/ingredients/{ingredient_id}', 'PizzaController@addIngredient');
Route::delete('pizzas/{pizza_id}/ingredients/{ingredient_id}', 'PizzaController@removeIngredient');
Route::resource('ingredients', 'IngredientController')->only('index');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
