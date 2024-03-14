@extends('layout.app')
<div class="nav d-flex justify-content-around align-items-center" style="height: 4.5em; box-shadow: 0px 5px 4px grey;">
    <div class="ms-5">
        @include('admin.adminsidenav')
    </div>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">JOBS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">APPLICATION</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <li class="naV-item bg-danger">
        <a class="nav-link" href="{{ route('logout') }}">LOGOUT</a>
    </li>
</div>