<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function __construct() {

        $this->middleware('guest', ['except' => 'logout']);
    }

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


        return redirect('/teams');
    }

    public function logout() {

        auth()->logout();

        return redirect('/login');
    }
}
