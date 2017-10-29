<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Portfolio;
use App\CategoryPortfolio;


use Session;
use Image;

class PortfolioController extends Controller
{
	public function index()
	{
		$header = 'Portfolio';
		$portfolios = Portfolio::with("categories")->get();

		return view('pages.admin.portfolio.index', compact('header', 'portfolios'));
	}

	public function create()
	{
		$header = 'Dodaj projekt';
		$categories = CategoryPortfolio::pluck('display_name','id');

		return view('pages.admin.portfolio.create', compact('header', 'categories'));
	}

	public function store(Request $request)
	{
		$portfolio = new Portfolio($request->all());

		if($request->hasFile('miniature')){
			$image = $request->file('miniature');
			$filename = md5(uniqid(rand(), true)) . "." . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save( public_path('/uploads/projects/miniature/' . $filename ));
          	$portfolio->miniature = $filename;
        }else{
        	$portfolio->miniature = 'default.jpg';
        }
		if($request->hasFile('preview')){
			$image = $request->file('preview');
			$filename = md5(uniqid(rand(), true)) . "." . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save( public_path('/uploads/projects/' . $filename ));
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

    public function edit($id)
    {
 		$portfolio = Portfolio::with('categories')->findOrFail($id);
		$categories = CategoryPortfolio::pluck('display_name','id');
		$header = $portfolio->name.' - Edytuj';   

		return view('pages.admin.portfolio.edit', compact('header', 'portfolio', 'categories'));	
    }

	public function update(Request $request, $id)
	{
        $portfolio = Portfolio::findOrFail($id);

        $portfolio->update($request->all());

		if($request->hasFile('miniature')){
			$image = $request->file('miniature');
			$filename = md5(uniqid(rand(), true)) . "." . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save( public_path('/uploads/projects/miniature/' . $filename ));
          	$portfolio->miniature = $filename;
        }else{
        	$portfolio->miniature = $portfolio->miniature;
        }
		if($request->hasFile('preview')){
			$image = $request->file('preview');
			$filename = md5(uniqid(rand(), true)) . "." . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save( public_path('/uploads/projects/' . $filename ));
          	$portfolio->preview = $filename;
        }else{
        	$portfolio->preview = $portfolio->preview;
        }

		Session::flash('message_success', 'Zmiany zostały zmienione.');

		return redirect('/admin/portfolio');
	}

    public function destroy($id)
    {
		Portfolio::destroy($id);

		Session::flash('message_error', 'Obiekt został usunięty');

		return redirect('admin/portfolio');
    }
}
