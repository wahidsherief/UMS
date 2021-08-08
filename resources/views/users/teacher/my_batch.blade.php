@extends('users.teacher.layout')
@section('title', 'My Batch')

@section('nav_bar')
@include('users.teacher.small_nav')
@endsection


@section('content')
<h2> </h2>

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
                    @foreach ($my_batch_students as $my_batch_student)


                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td> {{ $i++ }} </td>

                        <td>{{ $my_batch_student->registration_number }}</td>
                        <td>{{ $my_batch_student->roll_number }}</td>
                        <td>{{ $my_batch_student->firstname }} {{ $my_batch_student->lastname }}</td>
                        <td> <a href="{{ route('student_semester_result', $my_batch_student->id) }}"
                                class="btn btn-info btn-btn-sm"> Result</a></td>




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




@endsection
