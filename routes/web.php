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
Route::get('/', 'HomeController@showWelcome');

Route::get('/{page_name}', 'HomeController@showPage');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('profile/{name}', 'ProfileController@showProfile');

// Route::get('about', 'AboutController@showDetails');

// Route::get('about/{theSubject}', 'AboutController@showSubject');

// Route::get('about/directions', function() {
//     return 'Directions go here';
// });

// Route::any('submit-form', function() {
//     return 'Process Form';
// });

// // Route::get('about/{theSubject}', function($theSubject) {
// //     return $theSubject;
// // });

// Route::get('about/{art}/{price}', function($art, $price) {
//     return $art . ': ' . $price . '$';
// });

// Route::get('where', function() {
//     return Redirect::to('about/directions');
// });