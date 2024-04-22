<div class="offcanvas offcanvas-end" tabindex="-1" id="editoffcanvasRight_{{ $person->id }}" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Edit personal details</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="{{ url('updatepersonal/'.$person->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label"><b>Full Name</b></label>
                <input type="text" class="form-control" name="name" placeholder="Enter Full Name" value="{{$person -> full_name}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Gender</b></label>
                <select name="gender" id="" class="form-control" value="{{$person -> gender}}">
                    <option value="Male">Male</opfemion>
                    <option value="Female">Female</option>
            </select>
            </div>
            <div class="mb-3">
            <label class="form-label"><b>Date of Birth</b></label>
                <input type="date" class="form-control" name="dob" placeholder=" Date of Birth" value="{{$person -> dob}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Nationallity</b></label>
                <input type="text" class="form-control" name="nation" placeholder="Nationality" value="{{$person -> nation}}">
            </div>
            <div class="mb-3">
            <label class="form-label"><b>Email Address</b></label>
                <input type="email" class="form-control" name="email" placeholder="Email Adress" value="{{$person -> email}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Post Address</b></label>
                <input type="text" class="form-control" name="adress" placeholder="P.O.Box XXXXX" value="{{$person -> adress}}">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary mt-2">Save Details</button>
            </div>
        </form>
    </div>
</div>