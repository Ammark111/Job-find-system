@extends('layout.app')
@section('title')

Dashboard

@endsection
@section('content')
<div class="main" style=">
    <div class="contain">
        <div class="body">
            @include('layout.nav')
            <div class="container mt-5">
                <h3 class="mt-5`">Dashboard</h3>
                <hr>
                
            </div>
        </div>
    </div>
</div>
<style>
    tr,td,th  {
        border: 1px solid black;
    }    
</style>
@endsection