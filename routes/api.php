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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/tipocliente', 'App\Http\Controllers\ApiTipoClienteController@buscar');
Route::get('/clientes/list', 'App\Http\Controllers\ClienteController@list');
Route::get('/lineasventas/list', 'App\Http\Controllers\LineasVentasController@list');
Route::get('/ventas/list', 'App\Http\Controllers\VentasController@list');

