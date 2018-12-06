<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home()
	{
		return view('home',[
			'pak'=>'pakistan'



		]);


	}
	public function aboute()

	{
		return view('aboute');
	}
	public function contact()

	{
		return view('contact');
	}
}
