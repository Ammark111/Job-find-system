@extends('layout.app')

@section('title')
    Register
@endsection

@section('content')
@include('layout.navbar')
<div class="body" style="">
    <div style="background-color: #061f36b7;  display: flex;  align-items: center; height: 100vh;">
    <div class="contaner d-flex justify-content-center align-item-center;" style="background-color: #061f36b7; height: 100%; width: 100%;">
        <form  action="{{ route('newuser')}}" method="POST" class="p-5" style="margin-top: 7em;">
        @csrf
            <h1 class="h1 mb-4" style="font-size: 50px; color: white;">Register your new account</h1>
           <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="phone" placeholder="0XXX XXX XXX">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password1">
            </div>
            <button type="submit" class="btn btn-primary  mt-2">Register</button>
            <a href="{{ route('login')}}">
                <p class="pt-3">Do have an account, Login here</p>
            </a>
        </form>
    </div>
    </div>
</div>
@endsection
<style>
    .body {
        width: 100vw;
        height:100vh; 
        background-image: url({{ asset('asset/image/bc.jpg')}});
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-color: #061f3683;
    }

    label {
        color: white;
    }
</style>