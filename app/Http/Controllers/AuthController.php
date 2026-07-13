<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){    
        return view('auth.login'); 
    }

    public function register(){ 
        return view ('auth.register'); 
    }

    public function loginStore(Request $request)
    {
        try {

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {

                $request->session()->regenerate();

                return redirect()->route('games.index');
            }

            return back()
                ->withInput()
                ->withErrors([
                    'email' => 'Invalid email or password.',
                ]);

        } catch (\Exception $e) {

            return back()
                ->withInput()
                ->with('error', $e->getMessage());

        }
    }

    public function store(Request $request){ 
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'], 
            'password' => ['required']
        ]); 

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'], 
            'password' => $validated['password']
        ]); 


        return redirect()
        ->route('auth.register')
        ->with('success', 'Registration Successful'); 
    }
}
