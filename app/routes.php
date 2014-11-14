<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/acesso-negado', ['as' => 'user.denied', 'uses' => 'App\\Controllers\\Admin\\AdminController@denied']);

Route::group(['before' => ['auth', 'acl.permitted']], function() {
	Route::get('/admin', ['as' => 'admin', 'uses' => 'App\\Controllers\\Admin\\AdminController@dashboard']);
	Route::get('/individuals', ['as' => 'panel.individuals', 'uses' => 'App\\Controllers\\Admin\\AdminController@individuals']);
	Route::get('/entities', ['as' => 'panel.entities', 'uses' => 'App\\Controllers\\Admin\\AdminController@entities']);

	Route::get('/destroy', ['as' => 'admin.users.destroy', 'uses' => 'App\\Controllers\\Admin\\AdminController@destroy']);
	Route::get('/reports', ['as' => 'admin.reports', 'uses' => 'App\\Controllers\\Admin\\AdminController@reports']);
	Route::get('/payments', ['as' => 'admin.payments', 'uses' => 'App\\Controllers\\Admin\\AdminController@payments']);
});

Route::get('secret', [
	'before' => ['auth', 'acl.permitted'],
	'as' => 'user.secret',
	'uses' => 'UsersController@secret'
]);

/*
 |--------------------------------------------------------------------------
 | Authorization & Login
 |--------------------------------------------------------------------------
 */
Route::get('/login', ['as' => 'login', 'uses' => 'UsersController@login']);
Route::post('/login/validando', ['as' => 'login.verify', 'uses' => 'UsersController@verify']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'UsersController@logout']);

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group([
	'namespace' => 'App\\Controllers\\Admin',
	'prefix' => 'admin',
	'before' => 'auth.admin'
], function()
{

//	Route::get('/', ['as' => 'admin', 'uses' => 'AdminController@dashboard']);

	Route::resource('admin', 'AdminController');

});
