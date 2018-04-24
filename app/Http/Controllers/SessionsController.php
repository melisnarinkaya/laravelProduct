<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        // return redirect()->home();

    }


    public function already()
    {
        return view('posts.login');
    }

    public function repository()
    {
        if (!auth()->attempt(request(['email','password']))) {
            return back()->withErrors([
                'message' => 'Check your credentials and try again.'
            ]);
        }
        return redirect()->product();
    }
    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}