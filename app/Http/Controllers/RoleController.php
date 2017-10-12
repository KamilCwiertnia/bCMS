<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;

use Session;

class RoleController extends Controller
{
    public function index()
    {
    	$header = 'Role';
    	$roles = Role::get();

    	return view('pages.admin.roles.index', compact('header','roles'));
    }

    public function create()
    {
    	$header = 'Dodaj rolę';

    	return view('pages.admin.roles.create', compact('header'));
    }

    public function store(Request $request)
    {
    	$role = new Role($request->all());
    	$role->save();

    	Session::flash('message_success','Rola została dodan');

		return redirect('admin/roles');
    }
}
