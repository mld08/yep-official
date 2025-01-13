<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\LoginRequest;


class AuthController extends Controller
{
    public function login(){
        /*User::create([
            'name' => "admin",
            'email'=>"support@africayep.com",
            'password'=>bcrypt('Afr!caYep2025'),
        ]);*/
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request) {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.index'));
        }
        return back()->withErrors([
            'name' => 'Identifiant incorrect',
        ])->onlyInput('name');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with('success','Vous êtes maintenant déconnectés');
    }
}
