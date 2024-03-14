@extends('layout.app')
@if(session('danger'))
    <div id="danger-message" style="position: fixed; top: 10px; right: 2em; width: auto; height: 50px; border-radius: 3px; background-color: #ff3232b7;">
            <p style="padding: 10px;">  {{ session('danger') }}</p>
    </div>
    <script>
        setTimeout(function() {
            var successMessage = document.getElementById('danger-message');
            successMessage.style.display = 'none';
        }, 5000);
    </script>
@endif