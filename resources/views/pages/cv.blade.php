@extends('layout.app')
@section('title')

CV Preview

@endsection
@section('content')
<div class="main d-flex" style="background-color: rgb(223, 223, 223);">
    @include('layout.sidenav')
    <div class="contain" style="width: 85vw;">
        <div class="body">
            @include('layout.nav')
            <div class="container">
                <h3 class="mt-3">CV Preview</h3>
                <hr>
                <div class="detail mt-5" style="background-color: white; box-shadow: 3px 3px 3px grey;">
                    <div class="bg-primary" style="height: 0.7vh; border-radius: 3px;"></div>
                    <div class="button d-flex justify-content-end align-items-center" style="height: 8vh; box-shadow: 0px 2px 1px grey;">
                    </div>
                    <div class="container">

                    </div>  
               </div>
            </div>
        </div>
    </div>
</div>
@endsection