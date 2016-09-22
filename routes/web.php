<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
#钩子实现push以后与服务器同步
Route::post('/hook','HookController@hook');
Route::post('/register','UserController@register');
Route::post('/login','UserController@login');
Route::get('/login','UserController@loginView');
Route::post('/import','ContactsController@import');
Route::group(['middleware' => ['islogin']], function () {
    Route::get('/contacts_list','ContactsController@contactsList');
    Route::get('/app_contacts_list','ContactsController@appContactsList');
});

