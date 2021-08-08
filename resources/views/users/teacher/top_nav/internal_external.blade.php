@section('nav_bar')
    <!-- Navbar -->
    <nav class="small-nav navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">


            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item {{ request()->is('teacher/internal') ? 'active' : '' }}" href="{{ route('teacher.my_courses_internal') }}">Internal
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item {{ request()->is('teacher/external') ? 'active' : '' }}" href="{{ route('teacher.my_courses_external') }}">External
                </a>
            </li>


        </ul>
    </nav>
@endsection
