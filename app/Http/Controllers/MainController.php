<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\accademic;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function dashboard() {
            return view('pages.dashboard');
    }

    public function personal() {
        return view('pages.personal');
    }

    public function addpersonal(Request $req) {
        $post = new personal();
        $post->First_name = $req->fname;
        $post->middle_name = $req->mname;
        $post->last_name = $req->lname;
        $post->gender = $req->gender;
        $post->dob = $req->dob;
        $post->nation = $req->nation;
        $post->phone = $req->phone;
        $post->email= $req->email;
        $post->adress = $req->adress;
        // return $post;
        $post -> save();
        return redirect()->back();
    }

    public function academic(Request $req) {
        if ($req->method()=='POST') {
            $post = new accademic(); 
            $post -> institute_name = $req -> institute_name;
            $post -> level = $req -> level;
            $post -> program = $req -> program;
            $post -> country = $req -> country;
            $post -> year = $req -> year;
            $post -> save();
            return redirect() -> back()->with('success', 'Accademic details added successfully');
        }

        $datas = accademic::all();
        return view('pages.academic',compact('datas'));
    }

    public function deleteAccademic($id) {
        $data = accademic::find($id);
        $data -> delete();
        return redirect()->back()->with('danger', 'Accademic details removed successfully');
    }

    public function professional() {
        return view('pages.professional');
    }

    public function language() {
        return view('pages.language');
    }

    public function working() {
        return view('pages.working');
    }

    public function training() {
        return view('pages.training');
    }

    public function computer() {
        return view('pages.computer');
    }

    public function referees() {
        return view('pages.referees');
    }

    public function other() {
        return view('pages.other');
    }

    public function declaration() {
        return view('pages.declaration');
    }

    public function cv() {
        return view('pages.cv');
    }
}
