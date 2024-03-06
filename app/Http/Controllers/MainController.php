<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\accademic;
use App\Models\language;
use App\Models\working;

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
            return redirect() -> back()->with('success', 'Accademic Details Added successfully');
        }

        $datas = accademic::all();
        return view('pages.academic',compact('datas'));
    }

    public function deleteAccademic($id) {
        $data = accademic::find($id);
        $data -> delete();
        return redirect()->back()->with('danger', 'Accademic Qualification Details Removed successfully');
    }

    public function professional() {
        return view('pages.professional');
    }

    public function language(Request $req) {
        if($req->method()=='POST') {
            $post = new language();
            $post->language_name = $req->language_name;
            $post->speak = $req->speak;
            $post->read = $req->read;
            $post->write = $req->write;
            $post -> save();
            return redirect()->back()->with('success', 'Language Proficiency Details added successfully');
        }

        $datas = language::all();
        return view('pages.language',compact('datas'));
    }

    public function deletelanguage($id) {
        $data = language::find($id);
        $data -> delete();
        return redirect()->back()->with('danger', 'Language Proficiency Details removed successfully');
    }

    public function working(Request $req) {
        if ($req->method() == 'POST') {
            $post = new working();
            $post->institute = $req->institute;
            $post->address = $req->address;
            $post->job = $req->job;
            $post->duty = $req->duty;
            $post->Supervisor_name = $req->Supervisor_name;
            $post->Supervisor_phone = $req->Supervisor_phone;
            $post->start_date = $req->start_date;
            $post->end_date = $req->end_date;
            $post->save();
            return redirect()->back()->with('success','Work Experience Details Added Successfully');  
        }

        $datas =working::all();
        return view('pages.working',compact('datas'));
    }

    public function deleteworking($id) {
        $data = working::find($id);
        $data -> delete();
        return redirect()->back()->with('danger', 'Working Expirience Details removed successfully');
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
