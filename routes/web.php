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



// Using Controller
Route::get('/', 'PizzaController@index');

Route::get('/allpizza', 'PizzaController@list')->middleware('auth');

Route::get('/pizza/create', 'PizzaController@create');

Route::get('/pizza/edit/{id}', 'PizzaController@edit');

Route::post('/pizza/edit/{id}', 'PizzaController@update');

Route::post('/pizza','PizzaController@store');

Route::delete('/pizza/{id}','PizzaController@destroy')->middleware('auth');

/*
 WildCards routing Technic insted of using ?id=4
 using Controller 
*/
Route::get('/pizza/{id}', 'PizzaController@show')->middleware('auth');



Auth::routes([
    'register'=>false
]);

Route::get('/home', 'HomeController@index')->name('home');
