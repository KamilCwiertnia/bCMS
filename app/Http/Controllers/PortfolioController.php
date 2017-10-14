<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Portfolio;

use Session;
use Image;

class PortfolioController extends Controller
{
	public function index()
	{
		$header = 'Portfolio';
		$portfolios = Portfolio::get();

		return view('pages.admin.portfolio.index', compact('header', 'portfolios'));
	}

	public function create()
	{
		$header = 'Dodaj projekt';

		return view('pages.admin.portfolio.create', compact('header', 'roles'));
	}

	public function store(Request $request)
	{
		$portfolio = new Portfolio($request->all());
		if($request->hasFile('miniature')){
			$image = $request->file('miniature');
			$filename = md5(uniqid(rand(), true)) . "." . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save( public_path('/uploads/projects/miniature/' . $filename )); // Upload and resize image
          	$portfolio->miniature = $filename;
        }else{
        	$portfolio->miniature = 'default.jpg';
        }
		if($request->hasFile('preview')){
			$image = $request->file('preview');
			$filename = md5(uniqid(rand(), true)) . "." . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save( public_path('/uploads/projects/' . $filename )); // Upload and resize image
          	$portfolio->preview = $filename;
        }else{
        	$portfolio->preview = 'default.jpg';
        }

        $portfolio->save();

        Session::flash('message_success','Projekt został dodany do portfolio');

        return redirect('admin/portfolio');
    }

    public function show($id)
    {
    	$header = 'Portfolio';
    	$portfolio = Portfolio::find($id);

    	return view('pages.admin.portfolio.show', compact('header', 'portfolio'));
    }
}
