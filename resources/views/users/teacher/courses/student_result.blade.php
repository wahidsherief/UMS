@extends('users.teacher.layout')




@section('title',"Students Details")
@section('content')
<div class="container">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">All Student List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="card-body table-responsive p-0">

                <form action="{{ route('teacher.add_all_student_results',[$session_id,$semester_id,$course_id,$course_credit]) }}" method="POST">
                    <table class="table table-borderless table-hover table-sm">
                    <thead>
                        <tr>
                            <th class="sl">SL</th>
                            <th>Reg.No</th>
                            <th>ID.No</th>
                            <th class='md-col'>Student Name</th>
                            <th class='md-col'>Attendance</th>
                            <th class='md-col'>Class Test</th>
                            <th class='md-col'>PartA</th>
                            <th class='md-col'>PartB</th>
                            {{--  --}}

                        </tr>
                    </thead>
                    <tbody>
                            @csrf
                            @php $i=1;

                            @endphp
                            @foreach($semester_students as $semester_student)

                            <tr data-widget="expandable-table" aria-expanded="false">

                                    <input type="hidden" name="student_id[]" value={{ $semester_student->id }} placeholder="add marks" class="form-control">

                                <td>{{ $i++ }}</td>
                                <td>{{$semester_student->registration_number}}</td>
                                <td>{{$semester_student->roll_number}}</td>

                                <td>{{$semester_student->firstname}} {{$semester_student->lastname}}</td>

                                <td>
                                    <input type="text" name="attendance[]" placeholder="add marks" class="form-control" required>
                                </td>
                                <td>
                                    <input type="text" name="class_test[]" placeholder="add marks" class="form-control" required>
                                </td>
                                <td>
                                    <input type="text" name="part_a[]" placeholder="add marks" class="form-control" required>
                                </td>
                                <td>
                                    <input type="text" name="part_b[]" placeholder="add marks" class="form-control" required>
                                </td>
                            </tr>

                            @endforeach

                    </tbody>



                </table>
                <button type="submit" class="btn btn-success
                 float-right btn-sm"><i class="fa fa-check-circle"
                    aria-hidden="true"></i>
                Save</button>
            </form>

            </div>



        </div>
    </div>
</div>
</div>
@endsection
