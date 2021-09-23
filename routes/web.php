<?php

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
    return view('website');
})->name('website');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth','prefix'=>'admin'],function (){
    Route::get('/events', 'Admin\EventController@index')->name('events');
    Route::get('/add-event', 'Admin\EventController@create')->name('add-event');
    Route::post('/store-event', 'Admin\EventController@store')->name('store-event');


    Route::get('/page', 'Page@index')->name('page');
});
