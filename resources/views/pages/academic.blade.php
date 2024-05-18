@extends('layout.app')
@section('title')

Accademic Qualification Details

@endsection
@section('content')
    @include('layout.success')
    @include('layout.danger')
    <div class="contain">
        <div class="body">
            <div class="container">
                <h3 class="ps-4">Academic Qualification Details</h3>
                <hr>
                <div class="detail" style="background-color: white;">
                        <div class="button d-flex justify-content-end align-items-center" style="height: 3.5em;">
                            <button class="btn btn-primary me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><b>+</b> ADD</button>
                        </div>
                        <div class="container">
                            <table class="table table-striped mt-4">
                                <thead>
                                    <tr>
                                        <th class="p-3">#</th>
                                        <th class="p-3">Institute</th>
                                        <th class="p-3">Level</th>
                                        <th class="p-3">Year</th>
                                        <th class="p-3">Certificate</th>
                                        <th class="p-3">Action</th>
                                        <th class="p-3">Status</th>
                                    </tr>
                                </thead>
                                @php
                                    $counter = 1;
                                @endphp
                                <tbody>
                                     @foreach($academic as $academ) 
                                    <tr>
                                        <td class="p-2">{{$counter}}</td>
                                        <td class="p-2">{{$academ -> institute_name}}</td>
                                        <td class="p-2">{{$academ -> level}}</td>
                                        <td class="p-2">{{$academ -> year}}</td>
                                        <td class="p-2">
                                            <button class="btn btn-success btn-sm class="btn btn-success" data-toggle="modal" data-target="#pdfModal_{{ $academ->id }}"> 
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </td>
                                        <td class="p-2">
                                            <button class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" aria-controls="offcanvasRight" data-bs-target="#editoffcanvasRightacademic_{{ $academ->id }}"> 
                                                <i class="fa fa-pen"></i>
                                            </button>
                                            <a href="{{ url('deleteacademic/'.$academ->id)}}">
                                                <button class="btn btn-danger btn-sm"> 
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td class="p-2"></td>
                                    </tr>
                                    <div class="modal fade" id="pdfModal_{{ $academ->id }}" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="pdfModalLabel">{{$academ -> attachment}}</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $counter++;
                                    @endphp
                                    @include('pages.edit.editacadem')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Add academic qualification</h5>
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
                                <select name="level" id="" class="form-control">
                                    <option value="Primary Education">Primary Education</option>
                                    <option value="Secondary Education">Secondary Education</option>
                                    <option value="Certificate">Certificate</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Advance Education">Advance Education</option>
                                    <option value="Bacherol Degree">Bacherol Degree</option>
                                </select>
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
@endsection