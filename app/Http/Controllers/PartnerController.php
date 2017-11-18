<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;

use Session;
use Image;


class PartnerController extends Controller
{
    public function index()
    {
    	$header = 'Partnerzy';
    	$partners = $users = Partner::get();
    	
    	return view('pages.admin.partners.index', compact('header','partners'));	
    }

    public function create()
    {
    	$header = 'Dodaj partnera';	

    	return view('pages.admin.partners.create', compact('header'));		
    }

    public function store(Request $request)
    {
    	$partner = new Partner($request->all());

		if($request->hasFile('image'))
		{
			$image = $request->file('image');
			$filename = md5(uniqid(rand(), true)) . "." . $image->getClientOriginalExtension();
			Image::make($image)->resize(500, 500)->save( public_path('/uploads/partners/' . $filename ));
			$partner->image = $filename;
		}
		else
		{
			$partner->image = 'default.jpg';
		}   

		$partner->save();

		Session::flash('message_success','Partner został dodany do portfolio');

		return redirect('admin/partners'); 	

    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy($id)
    {
		$partner = Partner::findOrFail($id);
		$old_miniature = $partner->image;
		$partner->delete();

		if($old_miniature != "default.jpg")
		{
			if(file_exists(public_path('/uploads/partners/' . $old_miniature)))
			{
				unlink(public_path('/uploads/partners/' . $old_miniature));
			}
		} 

		Session::flash('message_error', 'Obiekt został usunięty');

		return redirect('admin/partners');
    }


}
