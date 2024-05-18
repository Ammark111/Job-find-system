@extends('layout.app')
@section('title')

    Change Password

@endsection
@section('content')
    @include('layout.success')
    @include('layout.danger')
    <div class="contain">
        <div class="body">
            <div class="container mt-5">
                <h3 class="mt-5`">Change password</h3>
                <hr>
                <div class="detail mt-5">
                    <div class="container">
                        <div class="form d-flex justify-content-center">
                            <form action="{{ Route('changepassword')}}" method="POST" style="width: 500px" class="mt-5">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><b>Old password</b></label>
                                    <input type="password" class="form-control" name="oldpassword" placeholder="Enter old password">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label"><b>New password</b></label>
                                    <input type="password" class="form-control" name="newpassword" placeholder="Enter new password">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label"><b>Confirm new password</b></label>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="confirm new password">
                                </div>
                                <button type="submit" class="btn btn-primary  mt-3 form-control">Change password</button>
                                <a href="{{ route('register')}}">
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection