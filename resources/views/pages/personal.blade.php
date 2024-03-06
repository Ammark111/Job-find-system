@extends('layout.app')
@section('title')

Personal Details

@endsection
@section('content')
<div class="main d-flex" style="background-color: rgb(223, 223, 223);">
    @include('layout.sidenav')
    <div class="contain" style="width: 85vw;">
        <div class="body">
            @include('layout.nav')
            <div class="container">
                <h3 class="mt-3">Personal Details</h3>
                <hr>
                <div class="detail mt-5" style="background-color: white; box-shadow: 3px 3px 3px grey;">
                    <div class="bg-primary" style="height: 0.7vh; border-radius: 3px;"></div>
                    <div class="button d-flex justify-content-end align-items-center" style="height: 8vh; box-shadow: 0px 2px 1px grey;">
                        <button type="button" class="me-3" style="width: 100px; height: 35px;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">+ Add New</button>
                    </div>
                    <div class="container">
                   
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
            <form  action="{{ Route('addpersonal')}}" method="POST" class="container mt-3">
                @csrf
                <label for="exampleInputEmail1" class="form-label mt-3"><b>Full names</b></label>
                <div class="forminput    justify-content-around">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="fname" placeholder=" First Name">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="mname" placeholder=" Middle Name">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="lname" placeholder=" Last Name" >
                    </div>
                </div>
                <label for="exampleInputEmail1" class="form-label"><b>Status</b></label>
                <div class="forminput justify-content-around">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="gender" placeholder="Gender" >
                    </div>
                    <div class="mb-3">
                        <input type="date" class="form-control" name="dob" placeholder=" Date of Birth" >
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="nation" placeholder="Nationality" >
                    </div>
                </div>
                <label for="exampleInputEmail1" class="form-label"><b>Contact Details</b></label>
                <div class="forminput justify-content-around">
                    <div class="mb-3">
                        <input type="number" class="form-control" name="phone" placeholder="Phone Eg.0XXX XXX XXX" >
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email Adress">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="adress" placeholder="P.O.Box XXXXX">
                    </div>
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
<style>
div .mb-3 input {
        /* width: 350px; */
        border: 1px solid grey;  
    }
</style>