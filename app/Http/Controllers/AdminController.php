<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	$header = 'Panel administratora';
    	
    	return view('pages.admin.index', compact('header'));
    }
}
