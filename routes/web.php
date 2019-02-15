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
Route::post('/registerEvent', 'RegistrationController@register');
Route::group(['prefix' => 'user'], function () {
    Route::post('/uploadDP', 'UserController@uploadDP');
    Route::post('/registerEvent', 'RegistrationController@register');
    Route::view('/events', 'views.events');
    Route::get('/dashboard', 'UserController@profile');
    Route::get('/login', 'UserAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'UserController@login');
  Route::get('/logout', 'UserAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'UserAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'UserController@register');

  Route::post('/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'UserAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm');
});
