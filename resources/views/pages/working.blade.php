@extends('layout.app')
@section('title')

Working Experience

@endsection
@section('content')
<div class="main d-flex" style="background-color: #cecadfb7;">
    @include('layout.sidenav')
    <div class="contain" style="width: 85vw;">
        <div class="body">
            @include('layout.nav')
            <div class="container">
                <h3 class="mt-3">Working Experience Details</h3>
                <hr>
                <div class="detail mt-5" style="background-colo: white; boxshadow: 3px 3px 3px grey;">
                    <div class="" style="height: 0.4vh; border-radius: 3px; background-color: rgb(24, 45, 49);"></div>
                    <div class="button d-flex justify-content-end align-items-center" style="height: 8vh; box-shadow: 0px 5px 5px grey;">
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button>
                    </div>
                    <div class="container">
                        <table class="table table-striped mt-4" style="border: 1px solid black;">
                            <thead >
                                <tr>
                                    <th class="p-3">Firstname</th>
                                    <th class="p-3">Lastname</th>
                                    <th class="p-3">Email</th>
                                    <th class="p-3">Firstname</th>
                                    <th class="p-3">Lastname</th>
                                    <th class="p-3">Email</th>        
                                    <th class="p-3">Email</th>        
                                    <th class="p-3">Action</th>        
                                    <th class="p-3">Status</th>        
                                </tr>                    
                            </thead>
                            <tbody >
                                <tr>
                                    <td>John</td>
                                    <td>John</td>
                                    <td>John</td>
                                    <td>John</td>
                                    <td>John</td>
                                    <td>John</td>
                                    <td>John</td>
                                    <td>
                                        <div>
                                            <a href="" class="btn btn-primary" style="height: 30px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-eye pb-2" viewBox="0 0 16 16">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                </svg>
                                            </a>
                                            <a href="" class="btn btn-danger" style="height: 30px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-trash pb-2" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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

<!-- ************************************************************************************************************************** -->

<!-- <div class="modal fadex" id="exampleModal" tabindex="-3" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog    modal-lg bg-transparent">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Academic Qualification</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label"><b>Product Name</b></label>
                                <input type="text" class="form-control" name="title" placeholder="Eg: Smart Watch">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Decsription</b></label>
                                <input type="text" class="form-control" name="description" placeholder="Simple Description About product">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Original Price</b></label>
                                <input type="number" class="form-control" name="oprice" placeholder="Eg: 10 000">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Current Price</b></label>
                                <input type="number" class="form-control" name="cprice" placeholder="Must be less than original price">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Product Image</b></label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary mt-2">Save Product</button>
                            </div>
                        </form>
                    </div>
               </div>
            </div>
        </div>
    </div> -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Offcanvas right</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...
</div>
@endsection