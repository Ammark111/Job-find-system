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

    public function jobpost() {
        return view('pages.jobpost');
    }

    public function dashboard() {
            return view('pages.dashboard');
    }

    //..........................................................................................................................................................

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
            return redirect()->back()->with('success', 'Personal details added successfully');
        }

        $personal = personal::where('user_id',auth()->id())->get();
        return view('pages.personal',compact('personal'));
    }

    public function deletepersonal($id) {
        $person = personal::find($id);
        $person -> delete();
        return redirect()->back()->with('danger', 'Personal details removed successfully');
    }

    public function updatepersonal(Request $req,$id) {
        $post = personal::find($id);
        $post->full_name = $req->name;
        $post->gender = $req->gender;
        $post->dob = $req->dob;
        $post->nation = $req->nation;
        $post->email= $req->email;
        $post->adress = $req->adress;
        $post -> update();
        return redirect()->back()->with('success', 'Personal details update successfully');
    }

    //..........................................................................................................................................................

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
            return redirect() -> back()->with('success', 'Academic details added successfully');
        }

        $academic = accademic::where('user_id',auth()->id())->get();
        return view('pages.academic',compact('academic'));
    }

    public function deleteacademic($id) {
        $academ = accademic::find($id);
        $academ -> delete();
        return redirect()->back()->with('danger', 'Academic details Details removed successfully');
    }

    public function updateacademic(Request $req,$id) {
        $post = accademic::find($id);
        $post -> institute_name = $req -> institute_name;
        $post -> level = $req -> level;
        $post -> program = $req -> program;
        $post -> country = $req -> country;
        $post -> year = $req -> year;
        $post -> update();
        return redirect()->back()->with('success', 'Academic details update successfully');
    }

    public function professional() {
        return view('pages.professional');
    }

    //..........................................................................................................................................................

    public function language(Request $req) {
        if($req->method()=='POST') {
            $post = new language();
            $post->language_name = $req->language_name;
            $post->speak = $req->speak;
            $post->read = $req->read;
            $post->write = $req->write;
            $post->user_id = auth()->id(); 
            $post -> save();
            return redirect()->back()->with('success', 'Language Proficiency Details added successfully');
        }

        $language = language::where('user_id',auth()->id())->get();
        return view('pages.language',compact('language'));
    }

    public function deletelanguage($id) {
        $lang = language::find($id);
        $lang -> delete();
        return redirect()->back()->with('danger', 'Language Proficiency Details removed successfully');
    }

    public function updatelanguage(Request $req,$id) {
        $post = language::find($id);
        $post->language_name = $req->language_name;
        $post->speak = $req->speak;
        $post->read = $req->read;
        $post->write = $req->write;
        $post -> update();
        return redirect()->back()->with('success', 'Language details update successfully');
    }

    //..........................................................................................................................................................

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
            $post->user_id = auth()->id(); 
            $post->save();
            return redirect()->back()->with('success','Work Experience Details Added Successfully');  
        }

        $working = working::where('user_id',auth()->id())->get();
        return view('pages.working',compact('working'));
    }

    public function deleteworking($id) {
        $work = working::find($id);
        $work -> delete();
        return redirect()->back()->with('danger', 'Working Expirience Details removed successfully');
    }

    public function updateworking(Request $req,$id) {
        $post = working::find($id);
        $post->institute = $req->institute;
        $post->address = $req->address;
        $post->job = $req->job;
        $post->duty = $req->duty;
        $post->Supervisor_name = $req->Supervisor_name;
        $post->Supervisor_phone = $req->Supervisor_phone;
        $post->start_date = $req->start_date;
        $post->end_date = $req->end_date;
        $post -> update();
        return redirect()->back()->with('success', 'Working expirience update successfully');
    }

    //..........................................................................................................................................................

    public function training(Request $req) {
        if ($req->method() == 'POST') {
            $post = new training();
            $post->training_name = $req->training_name;
            $post->description = $req->description;
            $post->institution = $req->institution;
            $post->start_date = $req->start_date;
            $post->end_date = $req->end_date;
            $post->user_id = auth()->id(); 
            $post->save();
            return redirect()->back()->with('success','Training $ workshop Details Added Successfully');
        }

        $training = training::where('user_id',auth()->id())->get();
        return view('pages.training',compact('training'));
    }

    public function deletetraining($id) {
        $train = training::find($id);
        $train -> delete();
        return redirect()->back()->with('danger', 'Training $ workshop Details removed successfully');
    }

    public function updatetraining(Request $req,$id) {
        $post = training::find($id);
        $post->training_name = $req->training_name;
        $post->description = $req->description;
        $post->institution = $req->institution;
        $post->start_date = $req->start_date;
        $post->end_date = $req->end_date;
        $post -> update();
        return redirect()->back()->with('success', 'Training & workshop update successfully');
    }


    //..........................................................................................................................................................

    public function computer(Request $req) {
        if($req->method() == 'POST') {
            $post = new computer();
            $post->computer_skill = $req->computer_skill;
            $post->level = $req->level;
            $post->user_id = auth()->id(); 
            $post -> save();
            return redirect()->back()->with('success', 'Computer Skill Details added successfully');
        }

        $computer= computer::where('user_id',auth()->id())->get();
        return view('pages.computer',compact('computer'));
    }

    public function deletecomputer($id) {
        $comp = computer::find($id);
        $comp -> delete();
        return redirect()->back()->with('danger', 'Computer Skill Details removed successfully');
    }

    public function updatecomputer(Request $req,$id) {
        $post =  computer::find($id);
        $post->computer_skill = $req->computer_skill;
        $post->level = $req->level;
        $post -> update();
        return redirect()->back()->with('success', 'Computer details update successfully');
    }

    //..........................................................................................................................................................

    public function referees(Request $req) {
        if($req->method() == 'POST') {
            $post = new referee();
            $post->full_name = $req->full_name;
            $post->institute = $req->institute;
            $post->position = $req->position;
            $post->phone = $req->phone;
            $post->email = $req->email;
            $post->address = $req->address;
            $post->user_id = auth()->id(); 
            $post -> save();
            return redirect()->back()->with('success', 'Referee Details added successfully');
        }

        $referees = referee::where('user_id',auth()->id())->get();
        return view('pages.referees',compact('referees'));
    }

    public function deletereferees($id) {
        $referee = referee::find($id);
        $referee -> delete();
        return redirect()->back()->with('danger','Referee Details removed successfully');
    }

  public function updatereferee(Request $req,$id) {
    $post = referee::find($id);
    $post->full_name = $req->full_name;
    $post->institute = $req->institute;
    $post->position = $req->position;
    $post->phone = $req->phone;
    $post->email = $req->email;
    $post->address = $req->address;
    $post -> update();
    return redirect()->back()->with('success', 'Referee details update successfully');
  }

    //..........................................................................................................................................................

    public function other(Request $req) {
        if($req->method() == 'POST') {
            $post = new attachment();
            $post->attachment = $req-> other;
            $post->user_id = auth()->id(); 
            $post -> save();
            return redirect()->back()->with('success', 'Other attachment details added successfully');
        }
    
        // $data = attachment::where('type','Other')->get();
        $others = attachment::where('user_id',auth()->id())->get();
        return view('pages.other',compact('others')); 
    }

    public function deleteother($id) {
        $other = attachment::find($id);
        $other -> delete();
        return redirect()->back()->with('danger', 'Other attachment details removed successfully');
    }

    public function updateother(Request $req,$id) {
        $post = attachment::find($id);
        $post->attachment = $req-> other;
        $post -> update();
        return redirect()->back()->with('success', 'Other attachment details update successfully');
    }

    //..........................................................................................................................................................

    public function declaration() {
        return view('pages.declaration');
    }

    public function cv() {
        return view('pages.cv');
    }
}
