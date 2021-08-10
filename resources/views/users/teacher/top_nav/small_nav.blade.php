<div class="ums-small-nav">
    <nav class="small-nav ums-short-nav
 navbar-expand">
        <ul class="navbar-nav ml-auto justify-content-end">
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item {{ request()->is('teacher/my-batch-students') ? 'active' : '' }}"
                    href="{{ route('MyBatchController.students') }}">Student List
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item {{ request()->is('teacher/my-batch-courses') ? 'active' : '' }}"
                    href="{{ route('teacher.my_batch_courses') }}">Courses
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item {{ request()->is('teacher/my-batch-notification') ? 'active' : '' }}"
                    href="{{ route('MyBatchController.notification') }}">Notification
                </a>
            </li>
        </ul>
    </nav>
</div>