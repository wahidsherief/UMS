@extends('users.teacher.layout')
@section('title',"Student Result")
@section('content')
<div class="container">
    <h2> </h2>

    <div class="container">
        <div class="card card-secondary">
            <div class="card-header">
                {{-- <h3 class="card-title">Welcome to {{ $my_batch->batch_name }}</h3> --}}
                Result of <span style="color:purple;font-weight:bold"> {{ $student_info->firstname}} {{ $student_info->lastname }}</span>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="sl">SL</th>
                                <th>Course Code</th>
                                <th>Course Name</th>
                            <th>Class Test</th>
                                <th>Attendance</th>
                                <th>Part_A</th>
                                <th>Part_B</th>
                                <th>N-Grade</th>
                                <th>L-Grade</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($student_results as $student_result)
@php $status= $student_result->status; @endphp

                            <!-- ./card-header -->


                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td> {{$i++}} </td>

                                <td>{{$student_result->course->course_code}}</td>
                                <td>{{$student_result->course->course_name}}</td>
                                <td>{{$student_result->class_test}}</td>

                                <td>{{$student_result->attendance}}</td>
                                <td>{{$student_result->part_a}}</td>
                                <td>{{$student_result->part_b}}</td>
                                <td>{{$student_result->n_grade}}</td>
                                <td>{{$student_result->l_grade}}</td>
<td>
    @if($status==0)
<div class="row">
    <div class="col">
    <form method="POST" action="{{route('accept_my_batch_result',[$student_result->student->id,$student_result->course->id])}}">
        @csrf
        <button type="submit" class="btn btn-success btn-md style_button" ><i class="fas fa-check"></i></button>
    </form>
</div>
<div class="col">
    <a href="" class="btn btn-danger btn-md style_button"><i class="fas fa-trash"></i>  </a>
</div></div>
@else
<button class="btn btn-success btn-md style_button" disabled>Accepted </button>

@endif
</td>



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

@if(Session::has('accepted'))
<script>
    swal("Accepted", "Result has been accepted", "success");
</script>
@endif

@endsection
