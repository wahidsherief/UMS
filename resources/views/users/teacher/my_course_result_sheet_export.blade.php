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
        width:270px;
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
                <!-- /.card-header -->
                <div class="card-body">
                        <div class="d-flex justify-content-between" >
                            <div class="">
                                Course Code: <b>{{ $course->course_code }}</b>
                            </div>
                            <div class="">
                                Course Title: <b>{{ $course->course_name }}</b>
                            </div>
                            <div class="">
                                Course Credit: <b>{{ $course->course_credit }}</b>
                            </div>
                            <div class="">
                                Total: <b>{{ $course->course_credit*100 }}</b>
                            </div>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th class="sl">SL</th>
                                    <th>Reg. No</th>
                                    <th>ID No</th>
                                    <th class="lg-col">Student Name</th>
                                    <th>Attd. (30)</th>
                                    <th>Class Test (60)</th>
                                    <th>Part A (105)</th>
                                    <th>Part B (105)</th>
                                    <th>Total (300)</th>
                                    <th>%</th>
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
                                    <td class="text-left">{{$result->student->firstname .' '. $result->student->lastname}} {{$result->student->firstname .' '. $result->student->lastname}}</td>
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

