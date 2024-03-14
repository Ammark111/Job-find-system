@extends('layout.app')
@if(session('success'))
    <div id="success-message" style="position: fixed; top: 10px; right: 2em; width: auto; height: 50px; border-radius: 3px; background-color: #46e753b7;">
            <p style="padding: 10px;">  {{ session('success') }}</p>
    </div>
    <script>
        setTimeout(function() {
            var successMessage = document.getElementById('success-message');
            successMessage.style.display = 'none';
        }, 5000);
    </script>
@endif