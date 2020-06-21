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

Route::get('/', function() {
    return redirect('usuarios');
});
Route::get('cadastrar', function () {
    return view('novo');
});
Route::get('usuarios', 'UserController@listarUsuarios');
Route::post('storage','UserController@storage');
Route::get('editar/{userId}','UserController@edit');
Route::put('update/{user}','UserController@update');
Route::delete('delete/{user}','UserController@delete');
