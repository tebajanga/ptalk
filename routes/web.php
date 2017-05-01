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
    return view('welcome');
})->name('login');

Route::post('/signup', [
    'uses' => 'UserController@signup',
    'as' => 'signup'
]);

Route::post('/signin', [
    'uses' => 'UserController@signin',
    'as' => 'signin'
]);

Route::get('/dashboard',[
    'uses' => 'UserController@dashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);

Route::post('/createpost',[
    'uses' => 'PostController@create',
    'as' => 'post.create'
]);

