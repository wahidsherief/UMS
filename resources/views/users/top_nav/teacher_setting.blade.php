<div class="ums-small-nav">
    <nav class="small-nav ums-short-nav navbar-expand">
        <ul class="navbar-nav ml-auto justify-content-end">


        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item  {{ request()->is('teacher/password') ? 'active' : '' }}" href="{{ route('teacher.password') }}">Password
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('teacher/privacy') ? 'active' : '' }}" href="{{ route('teacher.privacy') }}">Privacy and Policy
            </a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('teacher/terms') ? 'active' : '' }}" href="{{ route('teacher.terms') }}">Terms and Conditions
            </a>
        </li>


    </ul>

</nav>
