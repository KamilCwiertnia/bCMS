<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SkillPortfolio;

use Session;

class SkillPortfolioController extends Controller
{
    public function index()
    {
    	$header = 'Skill';
    	$skills = SkillPortfolio::get();

    	return view('pages.admin.skills.index', compact('header','skills'));
    }

    public function create()
    {
    	$header = 'Dodaj skill';

    	return view('pages.admin.skills.create', compact('header'));
    }

    public function store(Request $request)
    {
		$skill = new SkillPortfolio($request->all());
		$skill->save();

		Session::flash('message_success','Skill został dodany');

		return redirect('admin/skill-portfolio');
    }

    public function edit($id)
    {
    	$skill = SkillPortfolio::findOrFail($id);
    	$header = $skill->display_name.' - Edytuj';
    
    	return view('pages.admin.skills.edit', compact('skill', 'header'));  
    }

    public function update(Request $request, $id)
    {
        $skill = SkillPortfolio::findOrFail($id);
        $skill->update($request->all());

        Session::flash('message_success', 'Zmiany zostały zapisane');

        return redirect('/admin/skill-portfolio');
    }

    public function destroy($id)
    {
		SkillPortfolio::destroy($id);

		Session::flash('message_error', 'Skill został usunięty');

		return redirect('admin/skill-portfolio');
    }
}
