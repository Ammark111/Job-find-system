<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $user) { 
        if($user->method() == 'POST') {
            $post = new user();
            $user->validate([
                'phone' => 'required | max:10 | min:0'
            ]);
            $existuser = user::where('phone', $user->phone) ->first();
            if($existuser) {
                return redirect()->back()->with('danger','Phone number is already exist');
            }
            $post -> phone = $user -> phone;
            if($user -> password != $user -> password_confirmation) {
                return redirect()->back()->with('danger','password does not match');
            }
            $post -> password = hash::make($user -> password);
            $post -> save();
            return redirect('/login')->with('success','Registration is successfully please login to continue');
        }
        return view('pages.register');
    }
       
    public function login(Request $request) {
        if($request->method()=='POST') {

            $request->validate([
                'password' => 'required',
                'phone' => 'required|max:10 | min:0 |exists:users'
            ]);
            $user = User::where('phone', $request->phone)->first();
            if(!Hash::check($request->password,$user->password)){
                return back()->with('danger','phone number | password is incorrect');
            }

            auth()->login($user);
            if (auth()->check() == false) {
            }
            else {
                return redirect()->route('dashboard');
            }
            }
          
        return view('pages.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function changepassword(Request $req) {
        if($req->method()=='POST') {
            $user = Auth::user();
            if(!Hash::check($req->oldpassword,$user->password) ) {
                return redirect()->back()->with('danger','old password is incorrect');
            }
            if($user -> newpassword != $user -> password_confirmation) {
                return redirect()->back()->with('danger','password does not match');
            }
            $user->password = Hash::make($req->newpassword);
            $user -> save();
            return redirect()->back()->with('success','Password update succefully');
        }
        return view('pages.changepassword');
    }
}
