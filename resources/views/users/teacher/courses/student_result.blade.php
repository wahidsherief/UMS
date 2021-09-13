@extends('users.teacher.layout')


<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
    </style>

@section('title',"Students Details")

@section('content')
<div class="card-body pt-4">
    <div class="ums-content-heading">
      <h3 class="card-title font-weight-bold">Add Result</h3>
    </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-borderless table-hover table-sm">
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
                                    <input type="number" name="attendance[]"  placeholder="0-30" min="0" max="30" step="3" class="form-control" required >
                                </td>
                                <td>
                                    <input type="number" name="class_test[]" placeholder="0-60" min="0" max="60" class="form-control" required>
                                </td>
                                <td>
                                    <input type="number" name="part_a[]" placeholder="0-105" min="0" max="105" class="form-control" required>
                                </td>
                                <td>
                                    <input type="number" name="part_b[]" placeholder="0-105" min="0" max="105" class="form-control" required>
                                </td>
                            </tr>

                            @endforeach

                    </tbody>



                </table>
                <button type="submit" class="ums-tiny-btn mr-4 mt-2 text-success float-right"><i class="fa fa-check-circle"
                    aria-hidden="true"></i>
                Save</button>
            </form>

            </div>



        </div>
    </div>
</div>
</div>
@endsection
