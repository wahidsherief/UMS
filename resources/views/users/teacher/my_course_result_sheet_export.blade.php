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
</head>
<body>

        <div style="width:100%">

                <div class="card-header text-center">
                  <b>  <h4>University of Science and Technology Chittagong</h2>
                    <h5>Faculty of Science Engineering & Technology</h3></b>
                    <h6>Department of Computer Science & Engineering</h5>
                <b>    <h5>Batch -XXIX, 8Semester Final Examination, 2020</h3></b>


                </div>
                <!-- /.card-header -->
                <div class="card-body">
                        <div class="row">
                            <div class="col text-left">
                                Course Code: <b>{{ $course->course_code }}</b>
                            </div>
                            <div class="col text-center">
                                Course Title: <b>{{ $course->course_name }}</b>
                            </div>
                            <div class="col text-right">
                                Credit Code: <b>{{ $course->course_credit }}</b> Total: 300
                            </div>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th class="sl">SL</th>
                                    <th>Reg.No</th>
                                    <th>Roll.No</th>
                                    <th>Attendance(30)</th>
                                    <th>Class Test(60)</th>
                                    <th>Part A(105)</th>
                                    <th>Part B(105)</th>
                                    <th>Total(300)</th>
                                    <th>Percentage</th>
                                    <th>N Grade</th>
                                    <th>L Grade</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1; @endphp
                                @foreach($results as $result)


                                <!-- ./card-header -->


                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td> {{$i++}} </td>

                                    <td>{{$result->student->registration_number}}</td>
                                    <td>{{$result->student->roll_number}}</td>
                                    <td>{{$result->attendance}}</td>
                                    <td>{{$result->class_test}}</td>
                                    <td>{{$result->part_a}}</td>
                                    <td>{{$result->part_b}}</td>
                                    <td>{{$result->total}}</td>
                                    <td>@php echo number_format($result->percentage, 2, '.', ',');@endphp</td>
                                    <td>{{$result->n_grade}}</td>
                                    <td>{{$result->l_grade}}</td>



                                </tr>


                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>




</body>
</html>

