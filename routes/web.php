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



Route::get('tasks','taskcontroller@index' );
Route::get('tasks/{id}','taskcontroller@show' );
Route::get('about','blogcontroller@about_us' );
Route::get('create_model','blogcontroller@creat_model');

Route::get('/posts','postscontroller@index' )->name('home');
Route::get('/posts/create','postscontroller@create' );
Route::post('/posts','postscontroller@store');
Route::get('/posts/test', 'postscontroller@test');
Route::get('/posts/{post}','postscontroller@show' );
Route::post('/posts/{post}/comments','commentscontroller@store' );



Route::get('/register','RegistrationController@create' );
Route::post('/register','RegistrationController@store' );
Route::get('/login','SessionsController@create' );
Route::post('/login','SessionsController@store' );
Route::get('/logout','SessionsController@destroy' );