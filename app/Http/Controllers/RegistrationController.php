<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {


        // $form->persist();
        //Validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password'=>'required'
        ]);

        $user = User::create([
            'name' => request()->get('name'),
            'email' => request()->get('email'),
            'password' => Hash::make(request()->get('password')),
        ]);
        auth()->login($user);
        return redirect()->home();
    }


}
