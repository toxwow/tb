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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index') -> name('home');

Route::get('oferta', 'HomeController@oferta') -> name('oferta');

Route::get('oferta/{id}', 'HomeController@category') -> name('test');

Route::get('oferta/{id}/{id2}', 'HomeController@subCategory') -> name('subcategory');

Route::get('cennik', 'HomeController@prices') -> name('cennik');

Route::get('o-nas', 'HomeController@about') -> name('o-nas');

Route::get('galeria', 'HomeController@gallery') -> name('galeria');

Route::get('kontakt', function (){
    return view('contact');
}) -> name('kontakt');








