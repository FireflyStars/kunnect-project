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

Route::get('/', 'LandingPageController@showLandingPage')->name('landing');

Auth::routes(['verify' => true]);
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
// Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['verified'])->group(function(){
    Route::get('/dashboard', 'HomeController@showUserDashboard')->name('dash');
    Route::get('/admin', 'HomeController@showAdminDashboard')->name('admin-dash');
});

// 
Route::get('/states/{id}', 'Auth\RegisterController@sendStatesByCountry')->name('get.states.by.country');
Route::get('/cities/{id}', 'Auth\RegisterController@sendCitiesByState')->name('get.cities.by.states');
Route::get('/check-username/{username}', 'Auth\RegisterController@checkUsername')->name('check.username');