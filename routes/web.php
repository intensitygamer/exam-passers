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

Route::get('/', 'ExamPassers@lists');

Route::post('add_passers', 			'ExamPassers@store');
Route::post('search_passers', 		'ExamPassers@search_passers');
Route::get('school_by_passers', 	'ExamPassers@school_by_passers');
Route::get('get_passers', 			'ExamPassers@get_passers');
Route::get('lists_vue', 			'ExamPassers@lists_vue');