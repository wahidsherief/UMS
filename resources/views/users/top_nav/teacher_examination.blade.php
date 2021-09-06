<div class="ums-small-nav">
    <nav class="small-nav ums-short-nav navbar-expand">
        <ul class="navbar-nav ml-auto justify-content-end">


        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item  {{ request()->is('admin/pending-accounts') ? 'active' : '' }}" href="{{ route('admin.pending_accounts') }}">Current Examination
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('admin/teachers') ? 'active' : '' }}" href="{{ route('teacher.previous_exam') }}">Previous Examination
            </a>
        </li>




    </ul>

</nav>
</div>
