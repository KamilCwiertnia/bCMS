<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryPortfolio;

use Session;

class CategoryPortfolioController extends Controller
{
	public function index()
	{
		$header = 'Kategorie';
		$categories = CategoryPortfolio::get();

		return view('pages.admin.categories.index', compact('header', 'categories'));
	}

	public function create()
	{
		$header = 'Dodaj kategorię';

		return view('pages.admin.categories.create', compact('header'));

	}

	public function store(Request $request)
	{
		$categories = new CategoryPortfolio($request->all());
		$categories->save();

		Session::flash('message_success','Kotegoria została dodana');

		return redirect('admin/category-portfolio');
	}

	public function destroy($id)
	{
		CategoryPortfolio::destroy($id);

		Session::flash('message_error', 'Kategoria została usunięty');

		return redirect('admin/category-portfolio');
	}

    public function edit($id)
    {
        $categories = CategoryPortfolio::findOrFail($id);
        $header = $categories->display_name.' - Edytuj';

        return view('pages.admin.categories.edit', compact('categories', 'header'));  
    }

    public function update(Request $request, $id)
    {
        $categories = CategoryPortfolio::findOrFail($id);
        $categories->update($request->all());

        Session::flash('message_success', 'Zmiany zostały zapisane');

        return redirect('/admin/category-portfolio');
    }
}
