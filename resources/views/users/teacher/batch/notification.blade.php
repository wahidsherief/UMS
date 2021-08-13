@extends('users.teacher.layout')
@section('title', 'Notification')
@section('nav_bar')
@include('users.teacher.top_nav.small_nav')
@endsection

@section('content')
<div class="container">


    <div class="card card-secondary">
        <!-- /.card-header -->
        <div class="card-header">Result</div>
        <div class="card-body">
            <div class="card-body table-responsive p-0">

                <table class="table table-borderless table-hover ">
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

                            @for ($k = 0; $k < $count; $k++) @if ($batch_student->result[$k]->n_grade == '0.00')
                                @php $result = 0; @endphp
                                @endif

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
                <div class="mt-3 text-right">

                    <a href="{{ route('teacher.export_notification') }}" class="btn btn-warning btn-sm">Export as
                        PDF </a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
