@extends('layout.app')
@section('title')

Personal Details

@endsection
@section('content')
@include('layout.footer')
<div class="main" style=">
    <div class="contain">
        <div class="body">
            @include('layout.nav')
            <div class="container mt-5">
                <h3 class="mt-5`">Personal Details</h3>
                <hr>
                <div class="detail mt-5" style="background-color: white;">
                        <div class="" style="height: 4px; border-radius: 3px; background-color: rgb(24, 45, 49);"></div>
                        <div class="button d-flex justify-content-end align-items-center" style="height: 3.5em; box-shadow: 0px 5px 5px grey;">
                            <button class="btn btn-primary me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><b>+</b> ADD</button>
                        </div>
                        <div class="container">
                            <table class="table mt-4"  style="border: 1px solid black;">
                                <thead>
                                    <tr>
                                        <th class="p-3">#</th>
                                        <th class="p-3">Full Name</th>
                                        <th class="p-3">Gender</th>
                                        <th class="p-3">Action</th>
                                        <th class="p-3">Status</th>
                                    </tr>
                                </thead>
                                <tbody  style="margin-bottom: 5em;">
                                    @foreach($datas as $data)
                                    <tr>
                                        <td>1</td>
                                        <td>{{$data -> full_name}}</td>
                                        <td>{{$data -> gender}}</td>
                                        <td>
                                            <div class="d-flex" style="height: 30px;">
                                                <div class="bg-primary">
                                                    <a href="" class="btn btn-PRIMARY" style="height: 30px;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-eye pb-2" viewBox="0 0 16 16">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="bg-danger">
                                                    <a href="" class="btn btn-danger" style="height: 30px;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-trash pb-2" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                        </svg>
                                                    </a>
                                                </div>                                         
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Add Your Personal Details</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form action="{{ route('personal')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label"><b>Full Name</b></label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Full Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Gender</b></label>
                                <select name="gender" id="" class="form-control">
                                    <option value="Male">Male</opfemion>
                                    <option value="Female">Female</option>
                            </select>
                            </div>
                            <div class="mb-3">
                            <label class="form-label"><b>Date of Birth</b></label>
                                <input type="date" class="form-control" name="dob" placeholder=" Date of Birth" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Nationallity</b></label>
                                <input type="text" class="form-control" name="nation" placeholder="Nationality" >
                            </div>
                            <div class="mb-3">
                            <label class="form-label"><b>Email Address</b></label>
                                <input type="email" class="form-control" name="email" placeholder="Email Adress">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Post Address</b></label>
                                <input type="text" class="form-control" name="adress" placeholder="P.O.Box XXXXX">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary mt-2">Save Details</button>
                            </div>
                        </form>
                    </div>
                </div>
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
