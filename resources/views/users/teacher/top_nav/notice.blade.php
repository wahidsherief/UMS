
<div class="ums-small-nav">
    <nav class="small-nav ums-short-nav navbar-expand">
        <ul class="navbar-nav ml-auto justify-content-end">

        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('teacher/notice') ? 'active' : '' }}"
                href="{{ route('teacher.notice') }}">Notices
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('teacher/addnotice') ? 'active' : '' }}"
                href="{{ route('teacher.addnotice') }}">Add Notice
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('teacher/my-notice/{id}') ? 'active' : '' }}"
                href="{{ route('teacher.my_notice',Auth::user()->id) }}">My Notice
            </a>
        </li>

    </ul>
</nav>
</div>
