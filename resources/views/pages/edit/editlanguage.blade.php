@extends('layout.app')
<div class="offcanvas offcanvas-end" tabindex="-1" id="editoffcanvasRight_{{ $data->id }}" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Edit Language Proficiency</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('language')}}" method="POST">
            <h4></h4>
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label"><b>Language name</b></label>
                <input type="text" class="form-control" name="language_name" placeholder="Enter Language name">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Speak</b></label><br>
                <input type="radio" value="very good" name="speak"><span class="me-3"> Very Good</span>
                <input type="radio" value="good" name="speak"><span class="me-3"> Good</span>
                <input type="radio" value="fair" name="speak"><span class="me-3"> Fair</span>
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Read</b></label><br>
                <input type="radio" value="veryc good" name="read"><span class="me-3"> Very Good</span>
                <input type="radio" value="good" name="read"><span class="me-3"> Good</span>
                <input type="radio" value="fair" name="read"><span class="me-3"> Fair</span>
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Write</b></label><br>
                <input type="radio" value="very good" name="write"><span class="me-3"> Very Good</span>
                <input type="radio" value="good" name="write"><span class="me-3"> Good</span>
                <input type="radio" value="fair" name="write"><span class="me-3"> Fair</span>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary mt-2">Save Details</button>
            </div>
        </form>
    </div>
</div>