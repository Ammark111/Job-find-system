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
use App\Models\user;
use App\Models\job;

class adminController extends Controller
{
    public function admin() {
        return view('admin.index');
    }

    // public function userdetails($id) {
    //     $datas = User::with(['accademics','languages'])->find($id);
    //     return view('admin.userdetails',compact('datas'));
    // }

    public function user() {
        $datas = User::with(['accademics','languages'])->get();
        return view('admin.user',compact('datas'));
    }

    public function job(Request $req) {
        if($req->method() == 'POST') {
            $post = new job();
            $post->job = $req->job;
            $post->position = $req->position;
            $post -> save();
            return redirect()->back();
        }

        $datas = job::all();
        return view('admin.job',compact('datas'));
    }
}
