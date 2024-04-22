<div class="offcanvas offcanvas-end" tabindex="-1" id="editoffcanvasRightacademic_{{ $academ->id }}" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Edit academic qualification</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="{{ url('updateacademic/'.$academ->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label"><b>Institute name</b></label>
                <input type="text" class="form-control" name="institute_name" placeholder="Enter institute name" value="{{$academ -> institute_name}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Level</b></label>
                <input type="text" class="form-control" name="level" placeholder="choose bellow" value="{{$academ -> level}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Program name</b></label>
                <input type="text" class="form-control" name="program" placeholder="" value="{{$academ -> program}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Country</b></label>
                <input type="text" class="form-control" name="country" placeholder="Enter country" value="{{$academ -> country}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Year</b></label>
                <input type="text" class="form-control" name="year" placeholder="Enter year" value="{{$academ -> year}}">
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