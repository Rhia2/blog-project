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
});

Route::get('tasks','taskcontroller@index' );
Route::get('tasks/{id}','taskcontroller@show' );
Route::get('about','blogcontroller@about_us' );
Route::get('create_model','blogcontroller@creat_model');

Route::get('posts','postscontroller@index' );
Route::get('posts/create','postscontroller@create' );
Route::post('/posts','postscontroller@store');
Route::get('posts/register', 'postscontroller@register');
Route::get('posts/login','postscontroller@login');
