<?php

namespace App\Http\Controllers;

use App\Models\User; 

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view(
            'register.create'
        );
    }


    public function store(){
        $attributes = request()->validate([
            'name' => 'required|min:3|max:10',
            'username' => 'required|min:5|max:10|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        //create the user in the database
        $user = User::create($attributes);

        //login the users
        auth()->login($user);

        // session()->flash('success', 'Your Account has been Created');
        
        return redirect('/')->with('success', 'Your Account has been Created');


        
    }
}
