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


Route::get('/', 'Home@index')->name('home.name');
Route::get('services', 'About@index')->name('about.name');
Route::get('questions', 'Faq@index')->name('faq.name');
Route::get('books', 'Books@index')->name('books.name');
Route::get('video', 'Video@index')->name('video.name');

Route::get('articles/view/{idPage}/{id}.html', 'Articles@article')->name('article.name')->where(['idPage' => '[0-9]+', 'id' => '[0-9]+']);
Route::get('articles/{idCat}', 'Articles@category')->name('category.name')->where('idCat', '[0-9]+');
Route::get('articles', 'Articles@index')->name('articles.name');



Route::post('sendform', 'Home@sendform')->name('home.sendform');