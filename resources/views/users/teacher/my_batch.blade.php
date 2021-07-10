@extends('users.teacher.layout')
@section('title',"My Batch")

@section('nav_bar')

       <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a class="dropdown-item" href="{{ route('teacher.batch_all_student') }}">Student List
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="dropdown-item" href="{{ route('teacher.my_batch_courses') }}">Courses
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="dropdown-item" href="">Notification
                    </a>
                </li>

            </ul>


        </nav>
@endsection

@section('content')
<div class="container">
    <h2> </h2>

    <div class="container">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Welcome to {{ $my_batch->batch_name }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="sl">SL</th>
                                <th>Registration Number</th>
                                <th>Class ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($my_batch_students as $my_batch_student)


                            <!-- ./card-header -->


                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td> {{$i++}} </td>

                                <td>{{$my_batch_student->registration_number}}</td>
                                <td>{{$my_batch_student->roll_number}}</td>
                                <td>{{$my_batch_student->firstname}} {{ $my_batch_student->lastname }}</td>
                                <td> <a href="{{route('student_semester_result',$my_batch_student->id)}}" class="btn btn-info btn-btn-sm"> Result</a></td>




                                {{-- <td>
                                <a href="{{route('update.batch',$batch->id)}}" class="btn btn-warning mr-3"> <i
                                    class="fas fa-edit"></i></a>
                                <a href="{{route('delete.batch',$batch->id)}}" class="btn btn-danger"> <i
                                        class="fas fa-trash"></i></a>
                                </td> --}}
                            </tr>


                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




</div>



@endsection