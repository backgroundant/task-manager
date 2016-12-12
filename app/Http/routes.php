<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'WelcomeController@show');
Route::get('dashboard', 'DashboardController@show');


Route::get('add-task', 'TaskController@showAddTask');
Route::get('show-task/{id}', 'TaskController@showTask');
// Create a route that uses the post() function to submit form data
Route::post('process-add-task', 'TaskController@AddTask');
Route::post('delete-task/{id}', 'TaskController@delete');

Route::get('add-category', 'CategoryController@showAddCategory');

Route::post('process-add-category', 'CategoryController@AddCategory');
Route::post('delete-category/{id}', 'CategoryController@delete');
Route::get('categorized-task/{id}', 'CategoryController@showCategorizedTask');


