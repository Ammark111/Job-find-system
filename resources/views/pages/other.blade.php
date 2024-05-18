@extends('layout.app')
@section('title')

Other Attachment Details

@endsection
    @section('content')
    @include('layout.success')
    @include('layout.danger')
    <div class="contain">
        <div class="body">
            <div class="container mt-5">
                <h3 class="mt-5`">Other Attachment Details</h3>
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
                                        <th class="p-3">Attachements</th>
                                        <th class="p-3">View</th>
                                        <th class="p-3">Action</th>
                                        <th class="p-3">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                        $id = 1;
                                    @endphp
                                    @foreach($others as $other)
                                    <tr>
                                        <td class="p-3">{{$id}}</td>
                                        <td class="p-3">{{$other -> attachment}}</td>
                                        <td class="p-3">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#pdfModal_{{ $other->id }}">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </td>
                                        <td class="p-3">
                                            <div class="d-flex" style="height: ;">
                                                <div class="bg-primary" style="height: 20px;">
                                                    <a href="" class="btn btn-primary" data-bs-toggle="offcanvas" aria-controls="offcanvasRight" data-bs-target="#editoffcanvasRight_{{ $other->id }}">
                                                        <i class="fa fa-pen"></i>
                                                    </a>
                                                </div>
                                                <div class="bg-danger" style="height: 20px;">
                                                    <a href="{{ url('deleteother/'.$other->id)}}" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>                                         
                                            </div>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <div class="modal fade" id="pdfModal_{{ $other->id }}" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="pdfModalLabel">{{$other -> attachment}}</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe id="pdfFrame" src="{{ asset('storage/images/' . $other -> file)}}" width="100%" height="600px" frameborder="0"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php 
                                        $id ++;
                                    @endphp
                                    @include('pages.edit.editother')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Add other attachment</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form action="{{ route('other')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label"><b>Attachement</b></label>
                                <select name="other" id="" class="form-control">
                                    <option value="Birth Certificate">Birth Certificate</option>
                                    <option value="Curriculum Vitae">Curriculum Vitae</option>
                                    <option value="PCCB Certificate">PCCB Certificate</option>
                                    <option value="Recommended Letter">Recommended Letter</option>
                                    <option value="Deed Poll/Affidavil">Deed Poll/Affidavil</option>
                                </select>
                            </div>
                             <div class="mb-3">
                                <label class="form-label"><b>Upload certificate</b></label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <p style="color: red;">Should be PDF format maximam size 2MB</p>
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