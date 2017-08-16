<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}

    public function create()
    {
    	return view('sessions.create');
    }

    public function store()
    {
    	if(!auth()->attempt(request(['email', 'password']))){
    		return back();
    	}

    	return redirect()->home();
    }

    public function destory()
    {
    	auth()->logout();

    	return redirect()->home();
    }
}
