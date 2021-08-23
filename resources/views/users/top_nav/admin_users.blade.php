<div class="ums-small-nav">
    <nav class="small-nav ums-short-nav navbar-expand">
        <ul class="navbar-nav ml-auto justify-content-end">


        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item  {{ request()->is('admin/pending-accounts') ? 'active' : '' }}" href="{{ route('admin.pending_accounts') }}">Pending 
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('admin/courses') ? 'active' : '' }}" href="{{ route('course_data') }}">Teachers
            </a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('admin/coursetype') ? 'active' : '' }}" href="{{ route('add.coursetype') }}">Students
            </a>
        </li>


        {{-- <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item" href="{{ route('admin.assign_courses') }}">Assign Courses
            </a>
        </li> --}}

    </ul>

</nav>
</div>
