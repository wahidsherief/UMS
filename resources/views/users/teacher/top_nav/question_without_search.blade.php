<div class="ums-small-nav">
    <nav class="small-nav ums-short-nav navbar-expand">

        <ul class="navbar-nav ml-auto justify-content-end">
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item {{ request()->is('teacher/select-courses') ? 'active' : '' }}"
                    href="{{ route('teacher.add_course_question') }}">Add Question
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item  {{ request()->is('teacher/notice') ? 'active' : '' }}"
                    href="{{ route('teacher.my_question',Auth::user()->id) }}">My Questions
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item {{ request()->is('teacher/questions') ? 'active' : '' }}"
                    href="{{ route('teacher.show_questions') }}">All Questions
                </a>
            </li>
        </ul>

    </nav>
</div>