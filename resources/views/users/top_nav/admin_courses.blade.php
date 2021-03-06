<div class="ums-small-nav">
    <nav class="small-nav ums-short-nav navbar-expand">
        <ul class="navbar-nav ml-auto justify-content-end">


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
