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


Route::get('/','HomeController@index')->name('home');
Route::get('/portfolio','PortfolioController@index')->name('portfolio');
Route::get('/blog/{tag?}','BlogController@index')->name('blog');
Route::get('/single-blog/{id}','BlogController@single')->name('single-blog');
Route::get('/about','AboutController@index')->name('about');
Route::get('/contact','ContactController@index')->name('contact');

Route::post('/order','OrderController@index')->name('order');
Route::post('/send-message','ContactController@send')->name('send-message');
