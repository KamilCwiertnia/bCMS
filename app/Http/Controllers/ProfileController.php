<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

class ProfileController extends Controller
{
	public function index()
	{
		$user = Auth::user();

		return view('pages.profile.index', compact('user'));

	}
}
