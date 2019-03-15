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

Route::get('oferta/{id}', 'SubServiceController@category') -> name('test');

Route::get('oferta/{id}/{id2}', 'SubServiceController@subCategory') -> name('subcategory');

Route::get('cennik', 'PriceController@prices') -> name('cennik');

Route::get('o-nas', 'MainController@about') -> name('o-nas');

Route::get('galeria', 'MainController@gallery') -> name('galeria');

Route::get('kontakt', function (){
    return view('contact');
}) -> name('kontakt');




Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout') ->name('logoutUser');


//////////Admin///////

//Category

Route::get('/admin/kategorie', 'ServiceController@showAll') -> name('categoryAdmin');
Route::get('/admin/kategorie/{id}', 'ServiceController@show') -> name('categorySingleAdmin');
Route::get('/admin/kategorie/{id}/edit', 'ServiceController@edit')->name('categorySingleAdmin-edit');
Route::match(['put', 'patch'], '/admin/kategorie/{id}','ServiceController@update');
Route::get('/admin/dodaj-kategorie', function (){
    return view('admin.addCategory');
}) -> name('addNewCategory');

Route::post( '/admin/kategorie/dodaj','ServiceController@store');
Route::delete('/admin/kategorie/{id}', 'ServiceController@destroy');

//SubCategory

Route::get('/admin/podkategorie', 'SubServiceController@showAll') -> name('subCategoryAdmin');
Route::get('/admin/podkategorie/{id}/edit', 'SubServiceController@edit')->name('subCategoryAdmin-edit');
Route::match(['put', 'patch'], '/admin/podkategorie/{id}','SubServiceController@update');
Route::get('/admin/dodaj-podkategorie', 'SubServiceController@addView') -> name('addNewSubcategory');

Route::post( '/admin/podkategorie/dodaj','SubServiceController@store');
Route::delete('/admin/podkategorie/{id}', 'SubServiceController@destroy');

//Price

Route::get('/admin/cennik', 'PriceController@showAll')->name('priceAdmin');
Route::match(['put', 'patch'], '/admin/cennik/{id}','PriceController@update');
Route::post( '/admin/cennik', 'PriceController@store');
Route::delete('/admin/cennik/{id}', 'PriceController@destroy');

//Gallery

Route::get('/admin/galeria', 'GalleryController@showAll')->name('galleryAdmin');
Route::post('/admin/galeria', ['as'=>'upload.image','uses'=>'GalleryController@uploadImage']);
Route::delete('/admin/galeria/{id}', 'GalleryController@destroy');





