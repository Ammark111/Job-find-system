<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
<script src="/bootstrap/js/bootstrap.js"></script>
@include('layout.navbar')
<div class="body">
    <div class="contain" style=" height: 100vh; background-color: #0c3353e1;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="padding-top: 4.5em; height: 100%">
            <div class="carousel-inner mt-5">
                <div class="carousel-item active">
                    <h1 class="welcome-text">
                        <b>
                            Welcome to jobfind your gateway to exciting careeer opportunity.
                            
                            <br>
                            <br>
                            <span style="color: orange; font-size: 50px">
                                Explore, Search, and discover your next big career.
                            </span>
                        </b> <br> <br>
                        <button class="btn btn-primary">READ MORE</button>
                    </h1>
                </div>
                <div class="carousel-item">
                    <h1 class="welcome-text">
                        <b>
                            Welcome to job find we're here to connect you with endless possibilities.
                            <br>
                            <br>
                            <span style="color: orange; font-size: 50px">
                                Start your journey to find the the parfect ob today.
                            </span>
                        </b> <br> <br>
                        <button class="btn btn-primary">READ MORE</button>
                    </h1>
                </div>
                <div class="carousel-item">
                    <h1 class="welcome-text">
                        <b>
                            We're thrilled to have you join our community of job finders.
                            <br>
                            <br>
                            <span style="color: orange; font-size: 50px">
                                You're in the right place.
                            </span>
                        </b> <br> <br>
                        <button class="btn btn-primary">READ MORE</button>
                    </h1>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<div class="about" style="height: auto;">
    <div class="container">
        <h1 class="mt-5">~About Us~</h1>
        <div class="details">
            <p class="p-4" style="max-width: 600px; line-height: 35px;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Soluta eveniet nemo perferendis, dolorem ad voluptatum saepe, 
                exercitationem deleniti numquam ipsam vero corrupti maiores enim molestias 
                ipsa obcaecati eum? Porro doloremque minima at labore officia quia corporis harum 
                ratione. Expedita nulla, fugiat eveniet molestiae eaque repellendus laborum doloremque 
                quaerat dolores odit quasi. Sed, alias? Pariatur maiores fugit quos et enim accusamus ipsa 
                ex, nulla corporis vero iste iure obcaecati. Suscipit repellat sequi dolorum perspiciatis 
                iste et sapiente cumque vel rem quis hic, sint accusamus voluptatibus iure quasi dicta quidem
                praesentium distinctio eum. Minus iure dolore voluptate quasi accusamus dicta sint impedit.
            </p>
            <a class="p-4 mb-5">READ MORE >>></a>
        </div>
    </div>
</div>
<div class="jobs" style="height: auto; background-color: #0c3353e1;">
    <div class="container">
        <h1 class="pt-5">~Jobs Available~</h1>
        <div class="container mt-5 d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 500px; height: 250px; border-radius: 20px;">
                <div class="info p-4">
                    <h3><b>Job Name</b></h3>
                    <p class="mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Neque tempora quibusdam quis ipsa repellendus quam natus repellat ratione eos soluta.
                        Lorem ipsum dolor sit.
                    </p>
                    <button class="btn btn-success">APPLY</button>
                </div>
            </div>
            <div class="card m-3" style="width: 500px; height: 250px; border-radius: 20px;">
                <div class="info p-4">
                    <h3><b>Job Name</b></h3>
                    <p class="mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Neque tempora quibusdam quis ipsa repellendus quam natus repellat ratione eos soluta.
                        Lorem ipsum dolor sit.
                    </p>
                    <button class="btn btn-success">APPLY</button>
                </div>
            </div>
            <div class="card m-3" style="width: 500px; height: 250px; border-radius: 20px;">
                <div class="info p-4">
                    <h3><b>Job Name</b></h3>
                    <p class="mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Neque tempora quibusdam quis ipsa repellendus quam natus repellat ratione eos soluta.
                        Lorem ipsum dolor sit.
                    </p>
                    <button class="btn btn-success">APPLY</button>
                </div>
            </div>
            <div class="card m-3" style="width: 500px; height: 250px; border-radius: 20px;">
                <div class="info p-4">
                    <h3><b>Job Name</b></h3>
                    <p class="mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Neque tempora quibusdam quis ipsa repellendus quam natus repellat ratione eos soluta.
                        Lorem ipsum dolor sit.
                    </p>
                    <button class="btn btn-success">APPLY</button>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="bg-dark" style="height: 50vh;"></footer>
<style>
    .body {
        height:100vh; 
        background-image: url({{ asset('asset/image/bc.jpg')}});
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-color: #061f3683;
    }
    .body h1{
        text-align: center;
        max-width: 800px; 
        margin: 0 auto;
        color: #fff; 
        font-size: 40px;
        margin-top: 2em;
    }
</style>