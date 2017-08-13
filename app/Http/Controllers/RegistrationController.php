<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('sessions.create');
    }

    public function store()
    {
    	//Validate the form
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	//Create and save the user
    	$user = \App\User::create(request(['name', 'email', 'password']));

    	//Login the user
    	auth()->login($user);

    	//Redirect
    	return redirect()->home();
    }
}
