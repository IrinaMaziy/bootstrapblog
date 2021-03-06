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

Route::get('/', 'ArticleController')->name('index');
Route::get('/about', 'AboutController')->name('about');
Route::get('/services', 'ServiceController')->name('services');
Route::get('/contacts', 'ContactsController')->name('contacts');

Route::get('/category/{key}', 'PostByTagController')->name('postsByTag');


Route::get('/user/{id}', 'PostByUserController')->name('postsByUser');
Route::get('/post/{id}', 'PostByIdController')->name('postsById');
