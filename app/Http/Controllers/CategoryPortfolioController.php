<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryPortfolio;

class CategoryPortfolioController extends Controller
{
	public function index()
	{
		$header = 'Kategorie';
		$categories = CategoryPortfolio::get();

		return view('pages.admin.categories.index', compact('header', 'categories'));
	}
}
