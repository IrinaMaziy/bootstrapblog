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
    return view('index', ['articles' => \App\Models\Article::all()]);
})->name('index');
Route::get('/about', function () {
	return view('about');
})->name('about');
Route::get('/services', function () {
	return view('services', ['services' => \App\Models\Service::all()]);
})->name('services');
Route::get('/contacts', function () {
	return view('contacts', ['contacts' => \App\Models\Contact::all()]);
})->name('contacts');