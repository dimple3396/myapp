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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/gallery', 'PagesController@gallery');
Route::resource('posts', 'PostsController');

Route::get('/posts/{id}/email', 'MailController@send');
/*
Route::get('/about', function () {
    return view('pages.about');
});*/
Auth::routes(['verify' => true]);
Route::get('/dashboard', 'DashboardController@index')->middleware('verified');


Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Auth::routes(['verify' => true]);
Route::resource('slides', 'SliderController');

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/dashboard', function () {
    // Only verified users may enter...
//})->middleware('verified');