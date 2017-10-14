<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;

<<<<<<< HEAD
use Session;

=======
use Auth;
use Session;


>>>>>>> master
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

    	Session::flash('message_success','Rola została dodana');

		return redirect('admin/roles');
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
<<<<<<< HEAD
        $header = $role->display_name.' - Edytuj';

        return view('pages.admin.roles.edit', compact('role', 'header'));  
=======
        $header = $role->display_name. '- Edytuj';

        if($id == 1)
        {
             Session::flash('message_error', 'Nie można edytować tej roli');
             return redirect('admin/roles');
        }
        elseif($id == 2)
        {
             Session::flash('message_error', 'Nie można edytować tej roli');
             return redirect('admin/roles');
        }

        return view('pages.admin.roles.edit', compact('role', 'header')); 
>>>>>>> master
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update($request->all());

        Session::flash('message_success', 'Zmiany zostały zapisane');

        return redirect('/admin/roles');
    }

    public function destroy($id)
    {
<<<<<<< HEAD
        if($id == 1)
        {
                Session::flash('message_error', 'Nie można usunąć tej roli!');
                return redirect('admin/roles');
        }
        elseif($id == 2)
        {
            Session::flash('message_error', 'Nie można usunąć tej roli!');
            return redirect('admin/roles');
        }
       Role::destroy($id);

        Session::flash('message_error', 'Rola została usunięty');

        return redirect('admin/roles');
        }
=======
        
    }
>>>>>>> master
}
