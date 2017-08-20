<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store()
    {
    	//Validate the form
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'
    	]);

    	//Create and save the user
    	$user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

    	//Login the user
    	auth()->login($user);

        //Send a welcome email
        \Mail::to($user)->send(new Welcome($user));

    	//Redirect
    	return redirect()->home();
    }
}
