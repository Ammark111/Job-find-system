@extends('layout.app')

@section('title')
    Login
@endsection

@section('content')
@include('layout.navbar')
<div class="body">
    <div style="">
    <div class="containr d-flex justify-content-center align-item-center" style=" height: 100%; width: 100vw;">
        <form  action="{{ route('login')}}" method="POST" class="p-5" style="margin-top: 7em; height: 500px; width: 500px; border: 2px solid black">
        <h1 class="h1 mb-5" style="font-size: 40px;">Login in your account</h1>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="phone" placeholder="0XXX XXX XXX">
                <div id="emailHelp" class="form-text" style="color: white;">We'll never share your phone number with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary  mt-2">Login</button>
            <a href="{{ route('register')}}">
                <p class="pt-3">Don't have account, Register here</p>
            </a>
        </form>
    </div>
    </div>
</div>
@endsection