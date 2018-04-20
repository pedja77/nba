<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationMail;

class RegisterController extends Controller
{
    public function __construct() {

        $this->middleware('guest', ['only']);
    }

    public function create() {

        return view('register');

    }

    public function store() {
        //dd(request());

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        Mail::to($user->email)->send(new ConfirmationMail());

        $user->save();

        //auth()->login($user);

       

        return redirect('/login');
    }
}
