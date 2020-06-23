<?php

use Facade\FlareClient\View;
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

Route::get('/', function () {
    return view('home');
});

// Route::get('home', 'HomeController@index');
Route::get('company', 'CompanyController@index');
Route::get('contact', 'ContactController@index');
Route::get('gallery', 'GalleryController@index');
Route::get('menu', 'MenuController@index');
