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
            'username' => ['required', 'max:100', 'min:10'],
            'email' => ['required', 'email', 'max:50'],
            'password' => ['required', 'max:45', 'min:10']

        ]);

        User::create($attributes);

        return redirect('/');
    }

}
