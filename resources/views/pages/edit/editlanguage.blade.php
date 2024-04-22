<div class="offcanvas offcanvas-end" tabindex="-1" id="editoffcanvasRight_{{ $lang->id }}" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Edit Language Proficiency</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="{{ url('updatelanguage/'.$lang->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label"><b>Language name</b></label>
                <input type="text" class="form-control" name="language_name" placeholder="Enter Language name" value="{{$lang -> language_name}}">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Speak</b></label><br>
                <input type="radio" value="very good" name="speak" @if($lang -> speak === 'very good') checked @endif><span class="me-3"> Very Good</span>
                <input type="radio" value="good" name="speak" @if($lang -> speak === 'good') checked @endif><span class="me-3"> Good</span>
                <input type="radio" value="fair" name="speak" @if($lang -> speak === 'fair') checked @endif><span class="me-3"> Fair</span>
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Read</b></label><br>
                <input type="radio" value="very good" name="read" @if($lang -> read === 'very good') checked @endif><span class="me-3"> Very Good</span>
                <input type="radio" value="good" name="read" @if($lang -> read === 'good') checked @endif><span class="me-3"> Good</span>
                <input type="radio" value="fair" name="read" @if($lang -> read === 'fair') checked @endif><span class="me-3"> Fair</span>
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Write</b></label><br>
                <input type="radio" value="very good" name="write" @if($lang -> write === 'very good') checked @endif><span class="me-3"> Very Good</span>
                <input type="radio" value="good" name="write" @if($lang -> write === 'good') checked @endif><span class="me-3"> Good</span>
                <input type="radio" value="fair" name="write" @if($lang -> write === 'fair') checked @endif><span class="me-3"> Fair</span>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary mt-2">Save Details</button>
            </div>
        </form>
    </div>
</div>