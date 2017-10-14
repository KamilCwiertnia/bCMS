<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Portfolio;
=======
>>>>>>> master

class PageController extends Controller
{
	public function index()
	{
<<<<<<< HEAD
		$portfolios = Portfolio::get();

		return view('pages.index', compact('portfolios'));
=======
		return view('pages.index');
>>>>>>> master
	}

	public function aboutus()
	{
		return view('pages.aboutus');
	}  

	public function offer()
	{
		return view('pages.offer');
	}       
}
