<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LoginLogs;
use App\User;
use App\Role;

use Auth;
use Session;

class AdminUserController extends Controller
{
	public function index()
	{
		$header = 'Użytkownicy';
		$users = User::with("roles")->get();

		return view('pages.admin.users.index', compact('header', 'users'));
	}

	public function show($id)
	{
		$header = 'Użytkownicy';
		$user = User::find($id);

		return view('pages.admin.users.show', compact('header', 'user'));
	}

	public function create()
	{
		$header = 'Dodaj użytkownika';
		$roles = Role::pluck('display_name','id');
		
		return view('pages.admin.users.create', compact('header', 'roles'));	
	}

	public function store(Request $request)
	{
		$user = new User($request->all());
		$user->avatar = "default.png";
		$user->password = bcrypt($request->password);
		$user->save();
		$user->roles()->attach($request->roles);

		Session::flash('message_success','Użytkownik został dodany');

		return redirect('admin/users');
	}

	public function edit($id)
	{
		$user = User::with('roles')->findOrFail($id);
		$roles = Role::pluck('display_name','id');
		$header = $user->name.' '.$user->surname.' - Edytuj';

		return view('pages.admin.users.edit', compact('user', 'header','roles'));  
	}

	public function update(Request $request, $id)
	{
		$user = User::findOrFail($id);
		$user->update($request->all());
		$user->roles()->sync($request->input('roles'));

		Session::flash('message_success', 'Dane użytkownika zostały zmienione.');

		return redirect('/admin/users');
	}

	public function destroy($id)
	{
		if($id == Auth::user()->id)
<<<<<<< HEAD
		{
				Session::flash('message_error', 'Nie można usunąć zalogowanego obecnie użytkownika');
				return redirect('admin/users');
		}
=======
			{
				Session::flash('message_error', 'Nie można usunąć zalogowanego obecnie użytkownika');
				return redirect('admin/users');
			}
>>>>>>> master
		elseif($id == 1)
		{
			Session::flash('message_error', 'Nie można usunąć administratora!');
			return redirect('admin/users');
		}
<<<<<<< HEAD
=======
		
>>>>>>> master
		User::destroy($id);

		Session::flash('message_error', 'Użytkownik został usunięty');

		return redirect('admin/users');
		}

<<<<<<< HEAD
	} 

=======
	}
>>>>>>> master
