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

Auth::routes();

//POST ROUTE

Route::get('/', [
   "uses" => "BlogController@index",
]);

Route::get('/detail/{id}', [
   "uses" => "BlogController@show",
]);

Route::get('/about', function () {
    return view('blog/about');
});

Route::get('/contact', function () {
    return view('blog/contact');
});

//DASHBOARD

Route::get('/dashboard', [
   "uses" => 'DashboardController@index',
]);

Route::get('/dashboard/add', function () {
    return view('posts/add');
});

//POSTING

Route::post('/article/add', [
   "uses" => "DashboardController@store"
]);

Route::get('/article/delete/{id}',[
   "uses" => "DashboardController@delete",
]);
