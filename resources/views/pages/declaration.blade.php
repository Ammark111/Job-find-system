@extends('layout.app')
@section('title')

Decralation

@endsection
@section('content')
    <div class="contain">
        <div class="body">
            <div class="container mt-5">
                <h3 class="mt-5`">Decralation</h3>
                <hr>
                <div class="detail mt-5" style="background-color: white;">
                    <div class="container">
                        <p class="mt-5">
                            <input type="checkbox">
                            I declare that the information provided is complete and correct to the best of my knowledge.
                            I understand that any false information supplied could lead to my application being disqualified or my discharge
                            if I am appointed.
                        </p>
                        <p>
                            <strong>N.B Ticking the box will be taken as being as binding as your signature</strong>
                        </p>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary mt-2">Declare</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@include('layout.footer')
@endsection