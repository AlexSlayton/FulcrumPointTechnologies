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

// Main Page Routes 
Route::get('/', 'PostsController@index');

Route::get('/contact', 'PostsController@contact');

Route::get('/services', 'PostsController@services');

Route::get('/about_us', 'PostsController@about_us');

// Service Routes 
Route::get('/services/big_data_analytics', 'PostsController@big_data_analytics');

Route::get('/services/security', 'PostsController@security');

Route::get('/services/database', 'PostsController@database');

Route::get('/services/technology', 'PostsController@technology');

Route::get('/services/governance', 'PostsController@governance');

Route::get('/services/devops', 'PostsController@devops');

Route::get('/services/project_management', 'PostsController@project_management');

Route::get('/services/strategic_planning', 'PostsController@strategic_planning');

Route::get('/services/cloud_services', 'PostsController@cloud_services');

Route::get('/services/vendor_management', 'PostsController@vendor_management');



Route::post('/', 'EmailController@postContact');


// Route::get('/contact', function () {
//     return view('posts/contact');
// });
