<?php

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

/*Route::get('inicio', function () {
    return view('dashboard.index');
});*/
Route::resource('login', 'LogController');
Route::post('ingresar', ['as' => 'login.ingresar', 'uses' => 'LogController@ingresar']);
//Route::get('/login', array('as' => 'user.loginform', 'uses' => 'Auth\LoginController@showLoginForm'));
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index');
});
