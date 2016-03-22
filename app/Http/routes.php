<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', function()
{
    return View::make('home');
}));
    //Route::get('/logout',['uses' => 'Auth\AuthController@logout']);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/home', 'HomeController@index');
    Route::resource('news','NewsController');
    Route::resource('event','EventController');
    Route::resource('gallery','PhotoGalleryController');
    Route::get('single/{id}',['uses' => 'EventController@single']);
});