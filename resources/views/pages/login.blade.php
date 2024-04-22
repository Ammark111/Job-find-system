<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
@include('layout.navbar')
@include('layout.success')
@include('layout.danger')
<div class="containr d-flex justify-content-center align-items-center flex-wrap" style=" height: 100vh; width: 100vw;  background-color: #0c3353e1;">
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
        <form  action="{{ route('login')}}" method="POST" class="p-5 bg-light" style="height: 500px; width: 400px; margin-top: 6em;">
            <h1 class="h1 mb-4" style="font-size: 40px;">Login in your account</h1>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="phone" placeholder="0XXX XXX XXX">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary  mt-3 form-control">Login</button>
            <a href="{{ route('register')}}">
                <p class="pt-3">Don't have account, Register here</p>
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