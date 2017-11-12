<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Portfolio;
use App\CategoryPortfolio;
use App\SkillPortfolio;


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
		$skills = SkillPortfolio::pluck('display_name','id');

		return view('pages.admin.portfolio.create', compact('header', 'categories', 'skills'));
	}

	public function store(Request $request)
	{
		$portfolio = new Portfolio($request->all());

		if($request->hasFile('miniature') and $request->hasFile('preview'))
		{
			$miniature = $request->file('miniature');
			$filename = md5(uniqid(rand(), true)) . "." . $miniature->getClientOriginalExtension();
			Image::make($miniature)->resize(500, 500)->save( public_path('/uploads/projects/miniature/' . $filename ));
			$portfolio->miniature = $filename;

			$preview = $request->file('preview');
			$filename = md5(uniqid(rand(), true)) . "." . $preview->getClientOriginalExtension();
			Image::make($preview)->resize(500, 500)->save( public_path('/uploads/projects/' . $filename ));
			$portfolio->preview = $filename;
		}
		else
		{
			$portfolio->miniature = 'default.jpg';
		}

		$portfolio->save();
        $portfolio->skills()->attach($request->input('SkillList'));

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
		$skills = SkillPortfolio::pluck('display_name','id');
		$header = $portfolio->name.' - Edytuj';   

		return view('pages.admin.portfolio.edit', compact('header', 'portfolio', 'categories','skills'));	
	}

	public function update(Request $request, $id)
	{
		$portfolio = Portfolio::findOrFail($id);

		$portfolio->update($request->all());

		if($request->hasFile('miniature') and $request->hasFile('preview'))
		{
			$miniature = $request->file('miniature');
			$filename = md5(uniqid(rand(), true)) . "." . $miniature->getClientOriginalExtension();
			Image::make($miniature)->resize(500, 500)->save( public_path('/uploads/projects/miniature/' . $filename ) );

			$old_miniature = $portfolio->miniature;
			$old_preview = $portfolio->preview;
			$portfolio->miniature = $filename;
			$portfolio->preview = $filename;
			$portfolio->save();

			if($old_miniature != "default.jpg" and $old_preview != "default.jpg")
			{
				if(file_exists(public_path('/uploads/projects/miniature/' . $old_miniature)))
				{
					unlink(public_path('/uploads/projects/miniature/' . $old_miniature));
				}
				if(file_exists(public_path('/uploads/projects/' . $old_preview)))
				{
					unlink(public_path('/uploads/projects/' . $old_preview));
				}
			}  
		}
		
		$portfolio->skills()->sync($request->input('SkillList'));

		Session::flash('message_success', 'Zmiany zostały zmienione.');

		return redirect('/admin/portfolio');  
	}

	public function destroy($id)
	{
		$portfolio = Portfolio::findOrFail($id);
		$old_miniature = $portfolio->miniature;
		$old_preview = $portfolio->preview;
		$portfolio->delete();

		if($old_miniature != "default.jpg" and $old_preview != "default.jpg")
		{
			if(file_exists(public_path('/uploads/projects/miniature/' . $old_miniature)))
			{
				unlink(public_path('/uploads/projects/miniature/' . $old_miniature));
			}
			if(file_exists(public_path('/uploads/projects/' . $old_preview)))
			{
				unlink(public_path('/uploads/projects/' . $old_preview));
			}
		} 

		Session::flash('message_error', 'Obiekt został usunięty');

		return redirect('admin/portfolio');
	}
}
