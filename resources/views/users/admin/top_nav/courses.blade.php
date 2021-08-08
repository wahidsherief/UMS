
@section('nav_bar')
<!-- Navbar -->
<nav class="small-nav navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">


        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item  {{ request()->is('admin/course') ? 'active' : '' }}" href="{{ route('add.course') }}">Add Course
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('admin/courses') ? 'active' : '' }}" href="{{ route('course_data') }}">View Course
            </a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('admin/coursetype') ? 'active' : '' }}" href="{{ route('add.coursetype') }}">Add CourseType
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('admin/coursetypes') ? 'active' : '' }}" href="{{ route('coursetype_data') }}">View CourseType
            </a>
        </li>

        {{-- <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item" href="{{ route('admin.assign_courses') }}">Assign Courses
            </a>
        </li> --}}

    </ul>

</nav>
@endsection
