<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
@include('layout.navbar')
@include('layout.danger')
<div class="body">
    <div class="containr d-flex justify-content-center align-items-center" style=" height: 100vh; width: 100vw;  background-color: #0c3353e1;">
        <div style="width: 55%";>
            <h1 style="text-align: start; max-width: 85%; color: #fff; font-size: 50px">
                <b>
                    We're thrilled to have you join our community of job finders.
                    <br>
                    <br>
                    <span style="color: orange; font-size: 50px">
                        You're in the right place.
                    </span>
                </b>
            </h1>
        </div>
        <form  action="{{ route('register')}}" method="POST" class="p-5 bg-light" style="height: 550px; width: 400px; margin-top: 6em;">
            @csrf
            <h1 class="h1 mb-4" style="font-size: 40px;">Register your new account</h1>
            <div class="mb-3">
                <label for="InputEmail1" class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="phone" placeholder="0XXX XXX XXX" required>
            </div>
            <div class="mb-3">
                <label for="InputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password" id="password" required>
            </div>
            <div class="mb-3">
                <label for="InputPassword2" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" id="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3 form-control">Register</button>
            <a href="{{ route('login')}}">
                <p class="pt-3">Do have an account, Login here</p>
            </a>
        </form>
    </div>
</div>
<style>
    .body {
        width: 100vw;
        height:100vh; 
        background-image: url({{ asset('asset/image/bc.jpg')}});
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-color: #061f3683;
    }

    label {
        /* color: white; */
    }
</style>