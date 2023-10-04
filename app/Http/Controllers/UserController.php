<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => 'required|min:3',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $formData['password'] = bcrypt($formData['password']);

        $user = User::create($formData);

        auth()->login($user);


        return redirect('/user/login');
    }

    public function create()
    {
        return view('user.create');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/user/login');
    }

    public function login(Request $request)
    {
        return redirect('/user/login');
    }

    public function authenticate(Request $request)
    {
        $formData = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formData)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back();
    }
}
