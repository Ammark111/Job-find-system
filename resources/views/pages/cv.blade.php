@extends('layout.app')
@section('title')

    CV preview

@endsection
@section('content')
<div class="main" style=">
    <div class="contain">
        <div class="body">
            @include('layout.nav')
            <div class="container mt-5">
                <h3 class="mt-5`"> CV previews</h3>
                <hr>
                <div class="detail mt-5" style="background-color: white;">
                        
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout.footer')
@endsection