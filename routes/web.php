<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Register;
Use App\Http\Controllers\index;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/header', function () {
    return view('layouts.header');
});
Route::get('/footer', function () {
    return view('layouts.footer');
});
Route::get('edit', function () {
    return view('form.EditParent');
});

Auth::routes();


//les pages front methode get
Route::get('/index', 'index@index')->name('home');
Route::get('/inscrire', 'index@inscrire')->name('inscrire');
Route::get('/connecter', 'index@connecter')->name('connexion');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/inscri', 'Register@register')->name('inscription');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//CRUD ajouter compte parent
Route::get('listeparent', 'AjoutParentsController@index')->name('listeParents');

Route::get('ajoutparents', 'AjoutParentsController@create')->name('ajoutsParents');

Route::get('ajoutparents/create', 'AjoutParentsController@create');

// Route::get('listeparent/edit', 'AjoutParentsController@edit');

Route::post('ajoutparents/create', 'AjoutParentsController@store');

Route::get('editparent/edit/{id}', 'AjoutParentsController@edit');

Route::post('editparent/edit/{id}', 'AjoutParentsController@update');

Route::delete('deleteparents/delete/{id}','AjoutParentsController@destroy');

//les dashboards d'admin

Route::get('/indexadmin', 'DashboardController@dashboardindex')->name('indexadmin');

Route::get('/inneradmin', 'DashboardController@dashboardinner')->name('inneradmin');

Route::get('/detailadmin', 'DashboardController@dashboarddetail')->name('detailadmin');
