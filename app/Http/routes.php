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

    Route::get('/', function () {
        return view('home');
    });
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
Route::get('/logout', ['as' => 'logout', function () {
    return View::make('logout');
}]);

Route::get('logout', ['as' => 'logout', function () {
    Auth::logout();

    return redirect('/');
}]);

Route::group(['middleware' => ['web']], function () {
    //
    Route::auth();
    Route::get('/logout',['uses' => 'Auth\AuthController@logout']);
    Route::get('/home', 'HomeController@index');
    Route::resource('news','NewsController',
                ['except' => ['create', 'store', 'update', 'destroy', 'edit']]);
    Route::resource('event','EventController',
                ['except' => ['create', 'store', 'update', 'destroy', 'edit']]);
    Route::resource('gallery','PhotoGalleryController',
                ['except' => ['create', 'store', 'update', 'destroy', 'edit', 'gallery/{id}']]);
    Route::get('single/{id}',['uses' => 'EventController@single']);
    //Route::post('gallery/{id}/upload_photo', 'PhotoGalleryController@upload_photo');
    //Route::get('newscontrol',['as' => 'newscontrol', 'uses' => 'NewsController@control']);
    //Route::get('eventcontrol',['as' => 'eventcontrol', 'uses' => 'EventController@control']);
});

Route::group(['middleware' => ['admin']], function () {
    //
    //Route::auth();
    //Route::get('/home', 'HomeController@index');
    Route::resource('news','NewsController',
        ['only' => ['create', 'store', 'update', 'destroy', 'edit']]);
    Route::resource('event','EventController',
        ['only' => ['create', 'store', 'update', 'destroy', 'edit']]);
    Route::resource('gallery','PhotoGalleryController',
        ['only' => ['create', 'store', 'update', 'destroy', 'edit']]);
    Route::get('single/{id}',['uses' => 'EventController@single']);
    Route::post('gallery/{id}/upload_photo', 'PhotoGalleryController@upload_photo');
    Route::get('newscontrol',['as' => 'newscontrol', 'uses' => 'NewsController@control']);
    Route::get('eventcontrol',['as' => 'eventcontrol', 'uses' => 'EventController@control']);
});

/*
Route::resource('photo', 'PhotoController',
                ['only' => ['index', 'show']]);

Route::resource('photo', 'PhotoController',
                ['except' => ['create', 'store', 'update', 'destroy']]);
*/