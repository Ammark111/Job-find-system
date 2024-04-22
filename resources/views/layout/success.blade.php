@if(session('success'))
    <div id="success-message" style="position: fixed; top: 4.5em; right: 2em; width: auto; height: 50px; background-color: #058d0ca0;">
            <p style="padding: 13px;">  {{ session('success') }}</p>
    </div>
    <script>
        setTimeout(function() {
            var successMessage = document.getElementById('success-message');
            successMessage.style.display = 'none';
        }, 5000);
    </script>
@endif