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

Route::get('/', function () {
	$tasks = [

         'Karachi',
		 'Lahore',
		 'Islamabad',
		 'Multan',
		 'Bhawlpur',
		 'Khanpur'
		   ];
 return view('home',[

 	'tasks'=>$tasks


                     ]);
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/aboute', function () {
    return view('aboute');
});
