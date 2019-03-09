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

Route::get('/', 'MainController@index') -> name('home');

Route::get('oferta', 'ServiceController@index') -> name('oferta');

Route::get('oferta/{id}', 'MainController@category') -> name('test');

Route::get('oferta/{id}/{id2}', 'MainController@subCategory') -> name('subcategory');

Route::get('cennik', 'MainController@prices') -> name('cennik');

Route::get('o-nas', 'MainController@about') -> name('o-nas');

Route::get('galeria', 'MainController@gallery') -> name('galeria');

Route::get('kontakt', function (){
    return view('contact');
}) -> name('kontakt');




Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout') ->name('logoutUser');


//Admin

Route::get('/admin/kategorie', 'ServiceController@showAll') -> name('categoryAdmin');
Route::get('/admin/kategorie/{id}', 'ServiceController@show') -> name('categorySingleAdmin');
Route::get('/admin/kategorie/{id}/edit', 'ServiceController@edit')->name('categorySingleAdmin-edit');
Route::match(['put', 'patch'], '/admin/kategorie/{id}','ServiceController@update');



