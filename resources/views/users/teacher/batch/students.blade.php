@extends('users.teacher.layout')

@section('nav_bar')
@include('users.teacher.top_nav.small_nav')
@endsection

@section('title',"Students Details")
@section('content')
<!-- /.card-header -->
<div class="card-body">
    <div class="ums-content-heading">
        <h3 class="card-title">Student List</h3>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-borderless table-hover table-sm">
            <thead>
                <tr>
                    <th></th>

                    {{-- <th>Department Name</th> --}}
                    <th>Reg.No</th>
                    <th>ID.No</th>
                    <th>Student Name</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1;

                @endphp
                @foreach($my_batch_students as $my_batch_student)

                <tr data-widget="expandable-table" aria-expanded="false">
                    {{-- <td><img class="img-circle img-bordered-sm" src="{{$my_batch_student->user->picture}}"
                    alt="U"> --}}
                    <td class='text-left'><img class="img-circle"
                            src="https://image.kpopmap.com/2020/01/Seol-InAh-Profile-2.png" width="40" alt="U">
                    </td>
                    <td>{{$my_batch_student->registration_number}}</td>
                    <td>{{$my_batch_student->roll_number}}</td>

                    <td>{{$my_batch_student->firstname}} {{$my_batch_student->lastname}}</td>

                    <td class='text-right'>
                        <a href="{{ route('teacher.my_batch_student_profile',$my_batch_student->id) }}"><span
                                class='ums-tiny-btn'>Details</span></a>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>


    </div>
</div>
</div>
@endsection