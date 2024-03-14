@extends('layout.app')
@section('title')

Proffesionalism Details

@endsection
@section('content')
@include('layout.footer')
<div class="main" style=">
    <div class="contain">
        <div class="body">
            @include('admin.adminnav')
            <div class="container mt-5">
                <h3 class="mt-5`">Admin dashboard</h3>
                <hr>
                
            </div>
        </div>
    </div>
</div>
@endsection