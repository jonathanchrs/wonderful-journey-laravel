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

Route::get('/guesthome', 'ArticleController@getAllArticle');
Route::get('/category/{category_id}', 'ArticleController@getCategorizedArticle');
Route::get('/about_us', function(){
    return view('about_us');
});
Route::get('/register', 'UserController@showRegisterPage');
Route::post('/do_register', 'UserController@registerUser');
Route::get('/login', 'UserController@showLoginPage');
Route::post('/do_login', 'UserController@login');
Route::get('/home_admin', function(){
    return view('home_admin');
});