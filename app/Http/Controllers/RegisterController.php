<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:225|unique:users',
            'username' => 'required|min:3|max:225|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

       $validatedData['password'] = bcrypt($validatedData['password']);

       User::create($validatedData);

       $request->session()->flash('success', 'Registration Successful !!');

       return redirect()->route('login');
    }

}

