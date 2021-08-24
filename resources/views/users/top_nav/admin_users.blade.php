<div class="ums-small-nav">
    <nav class="small-nav ums-short-nav navbar-expand">
        <ul class="navbar-nav ml-auto justify-content-end">


        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item  {{ request()->is('admin/pending-accounts') ? 'active' : '' }}" href="{{ route('admin.pending_accounts') }}">Pending
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('admin/teachers') ? 'active' : '' }}" href="{{ route('admin.all_teachers') }}">Teachers
            </a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('admin/students') ? 'active' : '' }}" href="{{ route('admin.all_students') }}">Students
            </a>
        </li>


        {{-- <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item" href="{{ route('admin.assign_courses') }}">Assign Courses
            </a>
        </li> --}}

    </ul>

</nav>
</div>
