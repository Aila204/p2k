<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class AuthController extends Controller
{
    public function login(Request $request): RedirectResponse
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
         ])) {
            $user = User::where('email', $request->email)->first();
            Auth::login($user);
            return redirect('/');
         }
         return redirect()->back()->withErrors([
            'error' => 'Email or Password is incoret',
         ]); 
    } 
}
