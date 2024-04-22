<div class="offcanvas offcanvas-end" tabindex="-1" id="editoffcanvasRight_{{ $other->id }}" aria-labelledby="offcanvasRightLabel">
<div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Edit attachment</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
    <form action="{{ url('updateother/'.$other->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label"><b>Attachement</b></label>
            <select name="other" id="" class="form-control">
                <option value="Birth Certificate" @if( $other-> attachment === 'Birth Certificate') selected @endif>Birth Certificate</option>
                <option value="Curriculum Vitae" @if( $other-> attachment === 'Curriculum Vitae') selected @endif>Curriculum Vitae</option>
                <option value="PCCB Certificate" @if( $other-> attachment === 'PCCB Certificate') selected @endif>PCCB Certificate</option>
                <option value="Recommended Letter" @if( $other-> attachment === 'Recommended Letter') selected @endif>Recommended Letter</option>
                <option value="Deed Poll/Affidavil"  @if( $other-> attachment === 'Deed Poll/Affidavil') selected @endif>Deed Poll/Affidavil</option>
            </select>
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