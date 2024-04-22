@extends('layout.app')
@section('title')

Proffesionalism Details

@endsection
@section('content')
<div class="main" style=">
    <div class="contain">
        <div class="body">
            @include('layout.nav')
            <div class="container mt-5">
                <h3 class="mt-5`">Proffesionalism Details</h3>
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
                                        <th class="p-3">Institute</th>
                                        <th class="p-3">Level</th>
                                        <th class="p-3">Program</th>
                                        <th class="p-3">Country</th>
                                        <th class="p-3">Year</th>
                                        <th class="p-3">Certificate</th>
                                        <th class="p-3">Action</th>
                                        <th class="p-3">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Not yet</td>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Add New Academic Qualification</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form action="{{ route('academic')}}" method="POST">
                            <h4></h4>
                            @csrf
                            <div class="mb-3">
                                <label class="form-label"><b>Institute name</b></label>
                                <input type="text" class="form-control" name="institute_name" placeholder="Enter institute name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Level</b></label>
                                <input type="text" class="form-control" name="level" placeholder="choose bellow">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Program name</b></label>
                                <input type="text" class="form-control" name="program" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Country</b></label>
                                <input type="text" class="form-control" name="country" placeholder="Enter country">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Year</b></label>
                                <input type="text" class="form-control" name="year" placeholder="Enter year">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Upload certificate</b></label>
                                <input type="file" class="form-control" name="image">
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









<div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{$user->person -> full_name}} Details</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <h4>Personal Details</h4>
                                                        <div class="d-flex justify-content-around mt-5 flex-wrap">
                                                            <div class="detail">
                                                                <p><b>Full Name : </b> {{$user->person -> full_name}}</p>
                                                                <p><b>Gender : </b> {{$user->person -> gender}}</p>
                                                                <p><b>Date Of Birth : </b> {{$user->person -> dob}}</p>
                                                                <p><b>Nationality : </b> {{$user->person -> nation}}</p>
                                                                <p><b>Email Address : </b> {{$user->person -> email}}</p>
                                                                <p><b>Address : </b> {{$user->person -> adress}}</p>
                                                            </div>
                                                            <div class="passport bg-dark" style="width:230px; height:230px;">

                                                            </div>
                                                        </div>
                                                        <!-- <form action="">
                                                            <div class="mb3">
                                                                <select name="status" id="" class="form-control">
                                                                    <option value="Verified">Verified</option>
                                                                    <option value="Error">Error</option>
                                                                </select>
                                                                <button class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </form> -->
                                                        <hr>
                                                        <div>
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            hello
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                            <h4>Academic Details</h4>
                                                            @foreach($user->accademics??[] as $academic)
                                                                <div>
                                                                    <p><b>Institute Name : </b> {{$academic -> institute_name}}</p>
                                                                    <p><b>level : </b> {{$academic -> level}}</p>
                                                                    <p><b>Program : </b> {{$academic -> program}}</p>
                                                                    <p><b>Country : </b> {{$academic -> country}}</p>
                                                                    <p><b>Year : </b> {{$academic -> year}}</p>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <hr>
                                                        <div class="mt-5">
                                                            <h4>Language Proficincy Details</h4>
                                                            @foreach($user->languages??[] as $language)
                                                                <p><b>Language Name : </b> {{$language -> language_name}}</p>
                                                                <p><b>Speak : </b> {{$language -> speak}}</p>
                                                                <p><b>Read : </b> {{$language -> read}}</p>
                                                                <p><b>Write : </b> {{$language -> read}}</p>
                                                            @endforeach
                                                        </div>
                                                        <div>
                                                            <h4>Working &Training Details</h4>
                                                            <div class="container">
                                                                jhhhhjktjfhygjyjtr
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h4>Academic Details</h4>
                                                            
                                                        </div>
                                                        <div>
                                                            <h4>Academic Details</h4>
                                                            
                                                        </div>
                                                
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <!-- <button type="submit" class="btn btn-primary mt-2">Save Product</button> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>