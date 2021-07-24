<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <style>
    table {
        border-collapse: collapse;
    }
    .card-header{
        background:transparent;

    }
    table th {
        border: 1px solid #555;
        background-color: transparent;
        padding:5px;
        font-weight:bold;
        text-align:center;
    }
    table td {
        border: 1px solid #555;
        background-color: transparent;
        padding:5px;
        text-align:center;
    }
    .rowspan {
        border-left-width: 10px;
    }
    .lg-col{
        width:230px;
    }
    .md-col{
        width:100px;
    }
    .course-info-bar{
        flex:1;
        flex-direction:row;
        justify-content: space-between;
    }
</style>



</head>
<body>
    <div style="width:100%">


                <div class="card-header text-center">
                  <b>  <h2>University of Science and Technology Chittagong</h2>
                    <h3>Faculty of Science Engineering & Technology</h3></b>
                    <h3>Department of Computer Science & Engineering</h3>
                <b>    <h3>Final Examination, 2021</h3></b>
                <b>    <h3>Batch - XXIX, Semester - 8th</h3></b>

                </div>



        <div class="card card-secondary">
            <div class="card-body">
                <div class="card-body table-responsive p-0">

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="sl align-middle">SL</th>
                                <th class="align-middle">Reg. No</th>
                                <th class="align-middle md-col">ID. No</th>
                                <th class="lg-col align-middle">Student Name</th>

                                @php $total_credit_hour=0; @endphp
                                @foreach ($courses as $course)
                                    <th class="align-middle">
                                        {{ $course->course->course_code }}
                                        @php $total_credit_hour +=$course->course->course_credit; @endphp

                                    </th>
                                @endforeach

                                <th class="align-middle">GPA</th>
                                <th class="align-middle md-col">Result</th>
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
                                    <td class="text-left">{{$batch_student->firstname .' '. $batch_student->lastname}} </td>
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

</body></html>
