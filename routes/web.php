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
	return view('home')->with([
		'pak'=>'pakistan',
		'tasks'=>['some tasks']



	    ]);
	// $tasks = [

 //         'Karachi',
	// 	 'Lahore',
	// 	 'Islamabad',
	// 	 'Multan',
	// 	 'Bhawlpur',
	// 	 'Khanpur'
	// 	   ];
	// 	   return view ('home')->withTasks($tasks)->withPak('Pakistan');

// it is same woek in down side;

 // return view('home',[

 	// 'tasks'=>$tasks,
 	// runtime title pass http://indus_laravel.test/?title=pakistan
 	// 'pak'=> request('title')


                     // ]);
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/aboute', function () {
    return view('aboute');
});
