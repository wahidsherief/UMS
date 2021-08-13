<div class="ums-small-nav">
    <nav class="small-nav ums-short-nav navbar-expand">
<div class="row">
    <div class="col">
        <div class="search-container ml-auto justify-content-start">
            <form action="{{ route('question.search') }}" class='form-inline' >
                <select class="form-control" name="query" style="width:150px">

                    <label for="exampleInputEmail1">Select Semester</label>
                    @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->course_code }}
                    </option>
                    @endforeach
                </select>

              <button type="submit" class='ums-tiny-btn text-info border-0 ml-2'>Search</button>
            </form>
          </div>
        </div>
<div class="col">
        <ul class="navbar-nav ml-auto justify-content-end">
            

        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item {{ request()->is('teacher/questions') ? 'active' : '' }}" href="{{ route('teacher.show_questions') }}">All Questions
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item" href="{{ route('teacher.add_course_question') }}">Add Question
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item " href="{{ route('teacher.my_question',Auth::user()->id) }}">My Questions
            </a>
        </li>

    </ul>
</div>
</div>
</nav>
</div>
