<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class sessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //validations
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //attempt to authenticate
        if (auth()->attempt($attributes)) {
            //auth failed

            throw validationException::withMessages([
                'email' => 'sorry you a mistake'
            ]);
        }

        //session fixation to save from attack
        session()->regenerate();
        //flash the success message
        return redirect('/')->with('success', 'Wellcome Back.');

//        return back()
//            ->withInput()
//            ->withErrors(['email'=>'sorry you a mistake']);

    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'good bay!');
    }
}
