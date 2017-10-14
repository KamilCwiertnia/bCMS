<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PageController extends Controller
{
	public function index()
	{
		$portfolios = Portfolio::get();

		return view('pages.index', compact('portfolios'));
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
