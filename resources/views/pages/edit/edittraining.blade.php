<div class="offcanvas offcanvas-end" tabindex="-1" id="editoffcanvasRight_{{ $train->id }}" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Editt taining &  workshop </h5>
        <button type="button" class="btn-close text-reset" z-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="{{ url('updatetraining/'.$train->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label"><b>Training Name</b></label>
                <input type="text" class="form-control" name="training_name" placeholder="Enter Training Name" value="{{$train->training_name}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Training Description</b></label>
                <input type="text" class="form-control" name="description" placeholder="Enter Training Description" value="{{$train->description}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Institution</b></label>
                <input type="text" class="form-control" name="institution" placeholder="Enter Institution" value="{{$train->institution}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Attachment</b></label>
                <input type="file" class="form-control" name="file">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Start Date</b></label>
                <input type="date" class="form-control" name="start_date" placeholder="Enter Start Date" value="{{$train->start_date}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>End Date</b></label>
                <input type="date" class="form-control" name="end_date" placeholder="Enter End Date"  value="{{$train->end_date}}">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary mt-2">Save Details</button>
            </div>
        </form>
    </div>
</div>