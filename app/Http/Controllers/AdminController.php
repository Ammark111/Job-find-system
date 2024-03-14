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

class AdminController extends Controller
{
    public function admin() {
        return view('admin.index');
    }

    public function user() {
        $datas = personal::all();
        return view('admin.user',compact('datas'));
    }
}
