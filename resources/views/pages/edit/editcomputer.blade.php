<div class="offcanvas offcanvas-end" tabindex="-1" id="editoffcanvasRight_{{ $comp->id }}" aria-labelledby="offcanvasRightLabel">
<div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Edit computer literacy</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
    <form action="{{ url('updatecomputer/'.$comp->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label"><b>Computer Skills</b></label><br>
            <select name="computer_skill" id="" class="form-control">
                <option value="MS Word" @if( $comp->computer_skill === 'MS Word') selected @endif>MS word</option>
                <option value="MS Power point" @if( $comp->computer_skill === 'MS Power point') selected @endif>MS Power point</option>
                <option value="MS Excel" @if( $comp->computer_skill === 'MS Excel') selected @endif>MS Excel</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label"><b>Proficiency</b></label><br>
            <input type="radio" name="level" value="Very Good" class="me-2" @if($comp->level === 'Very Good') checked @endif><span>Very Good</span>
            <input type="radio" name="level" value="Good" class="me-2" @if($comp->level === 'Good') checked @endif><span>Good</span>
            <input type="radio" name="level" value="Fair" class="me-2" @if($comp->level === 'Fair') checked @endif><span>Fair</span>
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
