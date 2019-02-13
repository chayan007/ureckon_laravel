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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/signup', 'views.signup');
Route::view('/signin', 'views.login');
Route::view('/partners', 'views.partners');
Route::get('/profile', 'UserController@profile');
Route::view('/talks', 'views.talks');
Route::view('/web', 'views.web');
Route::view('/team', 'views.teams');
Route::view('/events', 'views.events');
Route::view('/about', 'views.aboutus');
Route::view('/workshops', 'views.workshops');
Route::post('/registerEvent', 'RegisterController@register');