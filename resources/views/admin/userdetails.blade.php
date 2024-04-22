<div class="modal fade" id="editModal_{{ $user->person->id }}" tabindex="-3" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
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
                    <hr>
                    <div class="container">
                    <h4>Academic Details</h4>
                        <div class="datas d-flex justify-content-center mt-5">
                            <div  class="data pe-5"><b>Institute Name</b></div>
                            <div class="data ps-5"><b>level</b></div>
                            <div class="data ps-5"><b>Program</b></div>
                            <div class="data ps-5"><b>Country</b></div>
                            <div class="data ps-5"><b>Year</b></div>
                        </div>
                        @foreach($user->accademics??[] as $academic)
                            <div class="datas d-flex justify-content-center">
                                <p class="data ps-5">{{$academic -> institute_name}}</p>
                                <p class="data ps-5">{{$academic -> level}}</p>
                                <p class="data ps-5">{{$academic -> program}}</p>
                                <p class="data ps-5">{{$academic -> country}}</p>
                                <p class="data ps-5">{{$academic -> year}}</p>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>