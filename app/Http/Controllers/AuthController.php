<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {
        if($request->method()=='POST') {

            $request->validate([
                'password' => 'required',
                'phone' => 'required|max:10 | min:10 |exists:users'
            ]);
            $user = User::where('phone', $request->phone)->first();
            if(!Hash::check($request->password,$user->password)){
                return back()->with('error','password do not match');
            }

            auth()->login($user);
            if (auth()->check() == false) {
                return back()->with('error','phone number orpassword is incorrect');
            }
            else {
                  return redirect()->route('dashboard');
            }
            }
          
        return view('pages.login');
    }

    public function register() {
        return view('pages.register');
    }

    public function newuser(Request $user) {
        $post = new user();
        $post -> phone = $user -> phone;
        $post -> password = hash::make($user -> password);
        $post -> save();
        return redirect('/login');
    }
}
