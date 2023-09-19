<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('lang/{lang}','App\Http\Controllers\LanguageController@switchLang')->name('lang.switch');

Route::get('/', function () {
    return view('pages.index');
});
Route::get('blogs', 'App\Http\Controllers\BlogController@index')->name('blogs.index');

Route::get('/blog/{blog}', 'App\Http\Controllers\BlogController@show')->name('blog.show');


Route::get('/blogs/create', 'App\Http\Controllers\BlogController@create')->name('blogs.create');
Route::post('/blogs', 'App\Http\Controllers\BlogController@store')->name('blogs.store');

Route::get('/privacy', function () {
    return view('pages.singlePages.privacy');
});

Route::get('/terms', function () {
    return view('pages.singlePages.terms');
});

Route::get('/faqs', function () {
    return view('pages.singlePages.faqs');
});


