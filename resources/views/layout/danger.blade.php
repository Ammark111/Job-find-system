@if(session('danger'))
    <div id="danger-message" style="position: fixed; top: 4.5em; right: 2em; width: auto; height: 50px; background-color: #ff3232b7;">
            <p style="padding: 13px;">  {{ session('danger') }}</p>
    </div>
    <script>
        setTimeout(function() {
            var successMessage = document.getElementById('danger-message');
            successMessage.style.display = 'none';
        }, 5000);
    </script>
@endif