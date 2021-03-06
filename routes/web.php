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
    return redirect('/register');
    // return view('auth/register');
});

Auth::routes();



// Route::get('/{id}', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/msg/{id}', 'MessageController@index')->name('message');
Route::post('/message', 'MessageController@post')->name('message');
Route::get('/message/delete', 'MessageController@delete');

Route::get('/next', 'MessageController@next')->name('message');
Route::get('/view/{id}', 'MessageController@view')->name('view');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/delete_user', 'UserController@deleteUser');



