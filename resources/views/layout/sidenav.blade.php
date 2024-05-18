<span class="close-btn" onclick="closeNav()">&times;</span>
<div class="nav link mt-5">
    <ul class="nav d-block" style="width: 100%">
        <li class="nav-item active">
            <a class="nav-link bg-primary" href="dashboard">
                <i class="fa fa-home pe-2"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('personal')}}">
                <i class="fa fa-user pe-2"></i>
                <span>Personal Details</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('academic')}}">
                <i class="fa fa-book pe-2"></i>
                <span>Academic Qualification</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('professional')}}">
                <i class="fa fa-user pe-2"></i>
                <span>Professionalism</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('language')}}">
                <i class="fa fa-user pe-2"></i>
                <span>Language Proficiency</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('working')}}">
                <i class="fa fa-user pe-2"></i>
                <span>Working Experience</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('training')}}">
                <i class="fa fa-user pe-2"></i>
                <span>Training & Workshop</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('computer')}}">
                <i class="fa fa-user pe-2"></i>
                <span>Computer Literacy</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('referees')}}">
                <i class="fa fa-user pe-2"></i>
                <span>Referees</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('other')}}">
                <i class="fa fa-user   pe-2"></i>
                <span>Other Attachment</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('declaration')}}">
                <i class="fa fa-pen pe-2"></i>
                <span>Decralation</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('cv')}}">
                <i class="fa fa-book pe-2"></i>
                <span>CV Preview</span>
            </a>
        </li>
    </ul>
</div>

<style>
    i,span {
        font-size: 14px;
    }
</style>