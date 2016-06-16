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
    return view('Admin');
});
Route::get('/home', function () {
    return view('Admin');
});


//define a single route to handle every action in a controller
Route::controller('/SuperAdmin/Users','SuperAdmin\UsersController');
Route::controller('/Admin/Users','Admin\UsersController');
Route::controller('/Admin/Groups','Admin\GroupsController');

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
    /*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
    
    
Route::auth();

});




