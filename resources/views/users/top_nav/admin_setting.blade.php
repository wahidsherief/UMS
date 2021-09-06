<div class="ums-small-nav">
    <nav class="small-nav ums-short-nav navbar-expand">
        <ul class="navbar-nav ml-auto justify-content-end">


        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item  {{ request()->is('admin/password') ? 'active' : '' }}" href="{{ route('admin.password') }}">Password
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('admin/privacy') ? 'active' : '' }}" href="{{ route('admin.privacy') }}">Privacy and Policy
            </a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('admin/terms') ? 'active' : '' }}" href="{{ route('admin.terms') }}">Terms and Conditions
            </a>
        </li>


    </ul>

</nav>
