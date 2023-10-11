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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::namespace('front')->group(function(){ 

    Route::match(['get','post'],'/','IndexController@indexHome');
    Route::get('about_us','IndexController@about_us');
    Route::get('register','IndexController@register');
    Route::get('member_login','IndexController@member_login');
    Route::get('login','IndexController@admin_login');
});


Route::prefix('/admin')->namespace('admin')->group(function(){ 

    Route::group(['middleware' => ['admin']], function(){ 

    Route::match(['get','post'],'dashboard','AdminController@dashboard');
    Route::get('banner','AdminController@banner');
    Route::get('faq','AdminController@faq');
    Route::get('users','AdminController@users');
    Route::get('stories','AdminController@stories');

    });
});
