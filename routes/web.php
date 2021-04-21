<?php

use Illuminate\Support\Facades\Route;
use App\Models\FilmController;
use App\Http\Controllers\SignUpController;

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

Route::get('/', 'App\Http\Controllers\FilmController@index');

Route::get('film/{id}', 'App\Http\Controllers\FilmController@show')->name('film');
Route::post('film/{id}', 'App\Http\Controllers\FilmController@reservation');


//INSCRIPTION
Route::get('signup', 'App\Http\Controllers\SignUpController@formulaire');
Route::post('signup', 'App\Http\Controllers\SignUpController@traitement');

//CONNEXION
Route::get('login', 'App\Http\Controllers\LoginController@formulaire');
Route::post('login', 'App\Http\Controllers\LoginController@traitement');

//ACCOUNT
Route::get('account', 'App\Http\Controllers\AccountController@dashboard');

Route::get('info', 'App\Http\Controllers\AccountController@info');

//LOGOUT
Route::get('/logout',  'App\Http\Controllers\AccountController@logout');