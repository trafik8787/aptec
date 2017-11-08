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

Route::feeds();

Route::get('/', 'Home@index')->name('home.name');
Route::get('services', 'About@index')->name('about.name');

Route::get('questions', 'Faq@index')->name('faq.name');
Route::get('questions/list', 'Faq@showFaqList')->name('showFaqList.name');
//страница вопроса
Route::get('questions/view/{id}.html', 'Faq@showFaqNotPage')->name('showFaq.name');
Route::get('print/questions/view/{id}.html', 'Faq@PrintShowFaqNotPage')->name('PrintShowFaq.name');
Route::get('questions/view/{idPage?}/{id}.html', 'Faq@showFaq')->name('showFaqCat.name');
//страница категории с пагинацией
Route::get('questions/{idCat}/{idPage?}', 'Faq@showCategoryFaq')->name('showCategoryFaq.name')->where(['idCat' => '[0-9]+', 'idPage' => '[0-9]+']);



Route::get('books', 'Books@index')->name('books.name');
Route::get('video', 'Video@index')->name('video.name');
Route::get('video/view/{id}.html', 'Video@showVideo')->name('ShowVideo.name');

Route::get('articles/view/{id}.html', 'Articles@articleNotPage')->name('articleNotPage.name')->where(['id' => '[0-9]+']);
Route::get('print/articles/view/{id}.html', 'Articles@PrintArticleNotPage')->name('PrintArticleNotPage.name')->where(['id' => '[0-9]+']);
Route::get('articles/view/{idPage}/{id}.html', 'Articles@article')->name('article.name')->where(['idPage' => '[0-9]+', 'id' => '[0-9]+']);
Route::get('articles/{idCat}/{idPage?}', 'Articles@category')->name('category.name')->where(['idCat' => '[0-9]+', 'idPage' => '[0-9]+']);
Route::get('articles', 'Articles@index')->name('articles.name');

Route::post('sendform', 'Home@sendform')->name('home.sendform');


Auth::routes();

