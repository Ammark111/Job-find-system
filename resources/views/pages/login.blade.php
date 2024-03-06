@extends('layout.app')

@section('title')
    Login
@endsection

@section('content')
<div class="body" style="">
    <div style="background-color: #061f36b7;  display: flex;  align-items: center; height: 100vh;">
    <div class="details bg-danger" style="width: 100vw;">
    
    </div>
    <div class="container d-flex justify-content-center align-item-center;" style="background-color: #061f36b7; height: 100%;">
        <form  action="{{ route('login')}}" method="POST" class="p-5 mt-5" style=" width: 500px">
        <h1 class="h1 mb-5" style="font-size: 50px; color: white;">Login in your account</h1>
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