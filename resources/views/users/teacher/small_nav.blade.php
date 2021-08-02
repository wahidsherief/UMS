<nav class="small-nav navbar navbar-expand navbar-white navbar-light ml-2">
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item active" href="{{ route('MyBatchController.students') }}">Student List
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item" href="{{ route('teacher.my_batch_courses') }}">Courses
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item" href="{{ route('MyBatchController.notification') }}">Notification
            </a>
        </li>
    </ul>
</nav>