<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    //
    public function create()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        //    $request->validate([]);dd('user');

        //validate        dd('user');

        $attr = request()->validate([
            "email" => ['required', 'email'],
            "password" =>  ['required', 'confirmed'],
            "first_name" =>  ['required'],
            "last_name" =>  ['required',],
        ]);

        //create user
        $user = User::create($attr);

        //login in
        Auth::login($user);
        //redirect
        return redirect('/jobs');
    }
}
