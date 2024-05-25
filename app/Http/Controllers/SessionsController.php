<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye');
    }

    public function create()
    {
        return view('login.index');
    }

    public function store()
    {
        //validate the request
        $attributes = request()->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required'
        ]);
        //attempt to login the user based on the provided credentials
        if (auth()->attempt($attributes)) {

            session()->regenerate();
            // //redirect with a success message
            return redirect('/')->with('success', 'Welcome Back!');
        }
    


        //if attepmt fails
        return back()->withInput()->withErrors([
            'username' => 'The Username  provided is wrong'
        ]);


    }




}
