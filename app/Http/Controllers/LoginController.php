<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create() {

        return view('login');

    }

    public function store() {

        if(!auth()->attempt(
            request(['email', 'password'])
        )) {
            //dd(request());
            return redirect('/register');
        }

        return redirect('/');
    }

    public function logout() {

        auth()->logout();

        return redirect('/login');
    }
}
