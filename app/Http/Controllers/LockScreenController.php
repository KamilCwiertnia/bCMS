<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;
use Session;

class LockScreenController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function lockscreen()
	{
		$user = Auth::user();

		session(['locked' => 'true']);

		return view('pages.admin.lockscreen', compact('user'));
	}

	public function unlock(Request $request)
	{

		$password = $request->password;

		$this->validate($request, [
			'password' => 'required|string',
		]);

		if(\Hash::check($password, \Auth::user()->password)){
			$request->session()->forget('locked');
			return redirect('/admin');
		}

		return back()->withErrors('Wprowadzone hasło nie jest prawidłowe');
	}
}
