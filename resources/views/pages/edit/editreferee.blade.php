<div class="offcanvas offcanvas-end" tabindex="-1" id="editoffcanvasRight_{{ $referee->id }}" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Edit Referee</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="{{ url('updatereferee/'.$referee->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label"><b>Referee Full Name</b></label>
                <input type="text" class="form-control" name="full_name" placeholder="Enter Referee Full Name" value="{{$referee->full_name}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Institute</b></label>
                <input type="text" class="form-control" name="institute" placeholder="Enter institute Name" value="{{$referee->institute}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Position</b></label>
                <input type="text" class="form-control" name="position" placeholder="Enter Referee Position" value="{{$referee->position}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Telephone Number</b></label>
                <input type="number" class="form-control" name="phone" placeholder="Enter Telephone Number" value="{{$referee->phone}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Email Address</b></label>
                <input type="email" class="form-control" name="email" placeholder="Enter Referee Email Address" value="{{$referee->email}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Address</b></label>
                <input type="text" class="form-control" name="address" placeholder="Enter Referee Address" value="{{$referee->address}}">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary mt-2">Save Details</button>
            </div>
        </form>
    </div>
</div>
