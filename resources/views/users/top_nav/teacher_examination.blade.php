<div class="ums-small-nav">
    <nav class="small-nav ums-short-nav navbar-expand">
        <ul class="navbar-nav ml-auto justify-content-end">


        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item  {{ request()->is('teacher/current-exam') ? 'active' : '' }}" href="{{ route('teacher.current_exam') }}">Current Examination
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('teacher/previous-exam') ? 'active' : '' }}" href="{{ route('teacher.previous_exam') }}">Previous Examination
            </a>
        </li>




    </ul>

</nav>
</div>
