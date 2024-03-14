<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\accademic;
use App\Models\language;
use App\Models\working;
use App\Models\training;
use App\Models\computer;
use App\Models\attachment;
use App\Models\referee;
use App\Models\sample;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function dashboard() {
            return view('pages.dashboard');
    }

    public function personal(Request $req) {
        // if(request()->isMethod('post')) {
        if($req->method()=='POST') {
            $post = new personal();
            $post->full_name = $req->name;
            $post->gender = $req->gender;
            $post->dob = $req->dob;
            $post->nation = $req->nation;
            $post->email= $req->email;
            $post->adress = $req->adress;
            $post->user_id = auth()->id();
            $post -> save();
            return redirect()->back()->with('success', 'Personal Details Added successfully');
        }

        $datas = personal::where('user_id',auth()->id())->get();
        return view('pages.personal',compact('datas'));
    }

    public function addpersonal(Request $req) {
    
    }

    public function academic(Request $req) {
        if ($req->method()=='POST') {
            $post = new accademic(); 
            $post -> institute_name = $req -> institute_name;
            $post -> level = $req -> level;
            $post -> program = $req -> program;
            $post -> country = $req -> country;
            $post -> year = $req -> year;
            $post->user_id = auth()->id(); 
            $post -> save();
            return redirect() -> back()->with('success', 'Accademic Details Added successfully');
        }

        $datas = accademic::where('user_id',auth()->id())->get();
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

    public function editlanguage($id) {
        $data = language::find($id);
        return view('pages.edit.editlanguage',compact('data'));
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
    public function training(Request $req) {
        if ($req->method() == 'POST') {
            $post = new training();
            $post->training_name = $req->training_name;
            $post->description = $req->description;
            $post->institution = $req->institution;
            $post->start_date = $req->start_date;
            $post->end_date = $req->end_date;
            $post->save();
            return redirect()->back()->with('success','Training $ workshop Details Added Successfully');
        }

        $datas = training::all();
        return view('pages.training',compact('datas'));
    }

    public function deletetraining($id) {
        $data = training::find($id);
        $data -> delete();
        return redirect()->back()->with('danger', 'Training $ workshop Details removed successfully');
    }

    public function computer(Request $req) {
        if($req->method() == 'POST') {
            $post = new computer();
            $post->computer_skill = $req->computer_skill;
            $post->level = $req->level;
            $post -> save();
            return redirect()->back()->with('success', 'Computer Skill Details added successfully');
        }

        $datas= computer::all();
        return view('pages.computer',compact('datas'));
    }

    public function deletecomputer($id) {
        $data = computer::find($id);
        $data -> delete();
        return redirect()->back()->with('danger', 'Computer Skill Details removed successfully');
    }

    public function referees(Request $req) {
        if($req->method() == 'POST') {
            $post = new referee();
            $post->full_name = $req->full_name;
            $post->institute = $req->institute;
            $post->position = $req->position;
            $post->phone = $req->phone;
            $post->email = $req->email;
            $post->address = $req->address;
            $post -> save();
            return redirect()->back()->with('success', 'Referee Details added successfully');
        }

        $datas = referee::all();
        return view('pages.referees',compact('datas'));
    }

    public function deletereferees($id) {
        $data = referee::find($id);
        $data -> delete();
        return redirect()->back()->with('danger','Referee Details removed successfully');
    }

    public function other(Request $req) {
        if($req->method() == 'POST') {
            $post = new attachment();
            $post->attachment = $req-> other;
            $post -> save();
            return redirect()->back()->with('success', 'Other Attachment Details added successfully');
        }
    
        // $data = attachment::where('type','Other')->get();
        $datas = attachment::all();
        return view('pages.other',compact('datas')); 
    }

    public function deleteother($id) {
        $data = attachment::find($id);
        $data -> delete();
        return redirect()->back()->with('danger', 'Other Attachment Details removed successfully');
    }

    public function declaration() {
        return view('pages.declaration');
    }

    public function cv() {
        return view('pages.cv');
    }
}
