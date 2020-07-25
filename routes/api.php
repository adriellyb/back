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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Ciando as rotas para a model Republic
Route::post('createRepublic','RepublicController@createRepublic');
Route::get('showRepublic/{id}','RepublicController@showRepublic');
Route::get('findRepublicByName/{name}','RepublicController@findRepublicByName');
Route::get('listRepublic','RepublicController@listRepublic');
Route::put('updateRepublic/{id}','RepublicController@updateRepublic');
Route::delete('deleteRepublic/{id}','RepublicController@deleteRepublic');

// Criando as rotas para a model Student
Route::post('createStudent','StudentController@createStudent');
Route::get('showStudent/{id}','StudentController@showStudent');
Route::get('listStudent','StudentController@listStudent');
Route::put('updateStudent/{id}','StudentController@updateStudent');
Route::delete('deleteStudent/{id}','StudentController@deleteStudent');
Route::put('addRepublic/{id}','StudentController@addRepublic');
Route::put('removeRepublic/{id}','StudentController@removeRepublic');
