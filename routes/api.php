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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/artikel','Artikel\Artikel@index');
Route::get('/artikel/{id}','Artikel\Artikel@getArtikel');
Route::post('/artikel/store','Artikel\Artikel@store');
Route::put('/artikel/edit/{id}','Artikel\Artikel@update');
Route::delete('/artikel/delete/{id}','Artikel\Artikel@delete');
