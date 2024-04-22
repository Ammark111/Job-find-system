<div class="offcanvas offcanvas-end" tabindex="-1" id="editoffcanvasRight_{{ $work->id }}" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Add working experience</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="{{ url('updateworking/'.$work->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label"><b>Institute</b></label>
                <input type="text" class="form-control" name="institute" placeholder="Enter institute name" value="{{$work->institute}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Institute Address</b></label>
                <input type="text" class="form-control" name="address" placeholder="Enter institute address" value="{{$work->address}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Job Title</b></label>
                <input type="text" class="form-control" name="job" placeholder="Enter job title" value="{{$work->job}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Duties</b></label>
                <input type="text" class="form-control" name="duty" placeholder="Enter Duties" value="{{$work->duty}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Supervisor Name</b></label>
                <input type="text" class="form-control" name="Supervisor_name" placeholder="Enter Supervisor Name" value="{{$work->supervisor_name}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Supervisor Telephone Number</b></label>
                <input type="number" class="form-control" name="Supervisor_phone" placeholder="Enter Supervisor Telephone Numbe" value="{{$work->supervisor_phone}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Start Date</b></label>
                <input type="date" class="form-control" name="start_date" placeholder="Enter Start Date" value="{{$work->start_date}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>End date</b></label>
                <input type="date" class="form-control" name="end_date" placeholder="Enter End date" value="{{$work->end_date}}">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary mt-2">Save Details</button>
            </div>
        </form>
    </div>
</div>