<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'username' => ['required', 'max:100', 'min:5', 'unique:users,username'],
            'email' => ['required', 'email', 'max:50', 'unique:users,email'],
            'password' => ['required', 'max:45', 'min:6']

        ]);

        User::create($attributes);

//        session()->flash('success', 'Account successfully created.'); You can accomplish this with the redirect too

        return redirect('/')->withflash('success', 'Account successfully created.');
    }

}
