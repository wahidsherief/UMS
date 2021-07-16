@extends('users.teacher.layout')
@section('title', 'Notification')
@section('nav_bar')
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item" href="{{ route('MyBatchController.students') }}">Student List
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


    <div class="container">


        <div class="card card-secondary">
            <!-- /.card-header -->
            <div class="card-header">Result</div>
            <div class="card-body">
                <div class="card-body table-responsive p-0">

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="sl">SL</th>
                                <th>Reg.No</th>
                                <th>Roll.No</th>
                                <th>Name of the Students</th>

                                @php $total_credit_hour=0; @endphp
                                @foreach ($courses as $course)
                                    <th>
                                        {{ $course->course->course_code }}
                                        @php $total_credit_hour +=$course->course->course_credit; @endphp

                                    </th>
                                @endforeach

                                <th>Earned GPA</th>
                                <th>Results</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                                $student = 0;
                            @endphp
                            @foreach ($batch_students as $batch_student)
                                @php
                                    $count = $batch_students[$student]->result->count();
                                    $total = 0;
                                    $student++;
                                    $result = 1;
                                @endphp

                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td> {{ $i++ }} </td>
                                    <td>{{ $batch_student->registration_number }}</td>
                                    <td>{{ $batch_student->roll_number }}</td>
                                    <td>{{ $batch_student->firstname }} {{ $batch_student->lastname }}</td>

                                    @for ($k = 0; $k < $count; $k++) @if ($batch_student->result[$k]->n_grade == '0.00') @php
                                        $result = 0;
                                    @endphp @endif
                                        <td> {{ $batch_student->result[$k]->l_grade }} </td>
                                        @php
                                            $n_grade = $batch_student->result[$k]->n_grade;
                                            $course_credit = $courses[$k]->course->course_credit;
                                            $total += $n_grade * $course_credit;
                                        @endphp
                                    @endfor

                                    @if ($count == $course_count)
                                        @php
                                            $gpa = $total / $total_credit_hour;
                                        @endphp
                                        <td>{{ $gpa }} </td>

                                        <td>
                                            @if ($result == 0)
                                                <span style="font-weight:bold;color:red"> Failed</span>
                                            @else
                                                <span style="font-weight:bold;color:Green"> Passed</span>
                                            @endif
                                        </td>
                                    @endif
                                </tr>

                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection
